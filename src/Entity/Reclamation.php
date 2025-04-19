<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; // Importation des contraintes de validation
use App\Repository\ReclamationRepository;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
#[ORM\Table(name: 'reclamation')]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_reclamation = null;

    public function getId_reclamation(): ?int
    {
        return $this->id_reclamation;
    }

    public function setId_reclamation(int $id_reclamation): self
    {
        $this->id_reclamation = $id_reclamation;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le nom d'utilisateur ne peut pas être vide!!!!!.")]
    #[Assert\Length(min: 3, max: 50, minMessage: "Le nom d'utilisateur doit comporter au moins {{ limit }} caractères.", maxMessage: "Le nom d'utilisateur ne peut pas comporter plus de {{ limit }} caractères.")]
    private ?string $nom_utilisateur = null;

    public function getNom_utilisateur(): ?string
    {
        return $this->nom_utilisateur;
    }

    public function setNom_utilisateur(string $nom_utilisateur): self
    {
        $this->nom_utilisateur = $nom_utilisateur;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "L'email ne peut pas être vide.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    private ?string $email = null;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $date = null;

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "La reclamation ne peut pas être vide !!!!.")]
    #[Assert\Length(min: 10, max: 500, minMessage: "La reclamation doit comporter au moins {{ limit }} caractères.", maxMessage: "La description ne peut pas comporter plus de {{ limit }} caractères.")]
    private ?string $description = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "La catégorie ne peut pas être vide.")]
    private ?string $categorie = null;

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getIdReclamation(): ?int
    {
        return $this->id_reclamation;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nom_utilisateur;
    }

    public function setNomUtilisateur(string $nom_utilisateur): self
    {
        $this->nom_utilisateur = $nom_utilisateur;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $etat = 'Non Répondu'; // Déclaration de la propriété etat

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;
        return $this;
    }
}
