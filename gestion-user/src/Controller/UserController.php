<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UserController extends AbstractController
{
    // BACK OFFICE DASHBOARD
    #[Route('/backShowuser', name: 'back_showuser')]
    public function ShowUser(Request $request, UserRepository $userRepository): Response
    {
        // Check admin access
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Access Denied.');
        }

        $searchTerm = $request->query->get('search', '');
        $filters = [
            'role' => $request->query->get('role'),
            'status' => $request->query->get('status'),
            'minAge' => $request->query->get('minAge'),
            'maxAge' => $request->query->get('maxAge'),
        ];

        // Remove empty filters
        $filters = array_filter($filters, function($value) {
            return $value !== null && $value !== '';
        });

        // Get users based on search criteria
        $users = !empty($searchTerm) || !empty($filters)
            ? $userRepository->findByAdvancedSearch($searchTerm, $filters)
            : $userRepository->findAll();
        
        // Calculate statistics
        $totalUsers = count($users);
        $adminCount = count(array_filter($users, fn($user) => in_array('ROLE_ADMIN', $user->getRoles())));
        $standardUsers = $totalUsers - $adminCount;

        return $this->render('backOffice/user/UserShow.html.twig', [
            'users' => $users,
            'totalUsers' => $totalUsers,
            'adminCount' => $adminCount,
            'standardUsers' => $standardUsers,
            'currentDateTime' => new \DateTime('now'),
            'searchTerm' => $searchTerm,
            'filters' => $filters,
        ]);
    }

    // ADD USER
    #[Route('/backAdduser', name: 'ajouter_user')]
    public function ajouterUser(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $userPasswordHasher,
        SluggerInterface $slugger
    ): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Access Denied.');
        }

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Handle password
                if ($plainPassword = $form->get('plainPassword')->getData()) {
                    $user->setPassword(
                        $userPasswordHasher->hashPassword($user, $plainPassword)
                    );
                }

                // Handle roles
                $roles = $form->get('roles')->getData();
                $user->setRoles($roles);

                // Handle profile photo
                if ($photoFile = $form->get('photoFile')->getData()) {
                    $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();

                    try {
                        $photoFile->move(
                            $this->getParameter('images_directory'),
                            $newFilename
                        );
                        $user->setPhotoDeProfile($newFilename);
                    } catch (FileException $e) {
                        $this->addFlash('error', 'Erreur lors du téléchargement de la photo: ' . $e->getMessage());
                        return $this->redirectToRoute('back_showuser');
                    }
                }

                $em->persist($user);
                $em->flush();

                $this->addFlash('success', 'Utilisateur créé avec succès.');
                return $this->redirectToRoute('back_showuser');

            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la création de l\'utilisateur: ' . $e->getMessage());
            }
        }

        return $this->render('backOffice/user/UserAdd.html.twig', [
            'form' => $form->createView(),
            'titre' => "Ajouter un utilisateur"
        ]);
    }

    // EDIT USER
    #[Route('/backEdituser/{id}', name: 'edit_user')]
    public function modifierUser(
        User $user,
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
        SluggerInterface $slugger
    ): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Access Denied.');
        }

        $form = $this->createForm(UserType::class, $user, ['is_edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Handle password if changed
                if ($plainPassword = $form->get('plainPassword')->getData()) {
                    $user->setPassword(
                        $passwordHasher->hashPassword($user, $plainPassword)
                    );
                }

                // Handle profile photo
                if ($photoFile = $form->get('photoFile')->getData()) {
                    // Delete old photo if exists
                    $this->deleteExistingPhoto($user);

                    $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();

                    try {
                        $photoFile->move(
                            $this->getParameter('images_directory'),
                            $newFilename
                        );
                        $user->setPhotoDeProfile($newFilename);
                    } catch (FileException $e) {
                        $this->addFlash('error', 'Erreur lors du téléchargement de la photo: ' . $e->getMessage());
                        return $this->redirectToRoute('back_showuser');
                    }
                }

                $em->flush();
                $this->addFlash('success', 'Utilisateur modifié avec succès.');
                return $this->redirectToRoute('back_showuser');

            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la modification: ' . $e->getMessage());
            }
        }

        return $this->render('backOffice/user/UserEdit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
            'titre' => "Modifier l'utilisateur"
        ]);
    }

    #[Route('/backBanUser/{id}', name: 'ban_user')]
    public function banUser(User $user, EntityManagerInterface $em): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Access Denied.');
        }

        try {
            if ($user->isBanned()) {
                $user->unban();
                $message = 'Utilisateur débloqué avec succès.';
            } else {
                $user->ban();
                $message = 'Utilisateur bloqué avec succès.';
            }

            $em->flush();
            $this->addFlash('success', $message);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'opération: ' . $e->getMessage());
        }

        return $this->redirectToRoute('back_showuser');
    }

    // DELETE USER
    #[Route('/backDeluser/{id}', name: 'delete_user')]
    public function DeleteUser(User $user, EntityManagerInterface $em): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Access Denied.');
        }

        // Prevent deleting admin users
        if ($user->isAdmin()) {
            $this->addFlash('error', 'Impossible de supprimer un administrateur.');
            return $this->redirectToRoute('back_showuser');
        }

        try {
            // Delete photo if exists
            $this->deleteExistingPhoto($user);

            $em->remove($user);
            $em->flush();
            
            $this->addFlash('success', 'Utilisateur supprimé avec succès.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de la suppression: ' . $e->getMessage());
        }

        return $this->redirectToRoute('back_showuser');
    }

    // Helper method to delete existing photo
    private function deleteExistingPhoto(User $user): void
    {
        if ($photoFilename = $user->getPhotoDeProfile()) {
            $photoPath = $this->getParameter('images_directory').'/'.$photoFilename;
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
    }
}