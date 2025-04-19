<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Champ "Nom d'utilisateur" avec un label et des placeholders
            ->add('nom_utilisateur', TextType::class, [
                'label' => 'Nom de l\'utilisateur',
                'label_attr' => [
                    'class' => 'font-weight-bold', // Mettre le label en gras
                     'style' => 'color: #000;'
                ],
                'attr' => [
                    'class' => 'form-control form-control-lg',  // Utiliser une taille de champ plus large
                    'placeholder' => 'Entrez votre nom',
                    'aria-label' => 'Nom de l\'utilisateur',  // Accessibilité
                    'required' => true, // Champ obligatoire
                ],
            ])
            // Champ "Email" avec validation d'email
            ->add('email', EmailType::class, [
                'label' => 'Adresse e-mail',
                'label_attr' => [
                    'class' => 'font-weight-bold', // Mettre le label en gras
                    'style' => 'color: #000;'
                ],
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Entrez votre adresse e-mail',
                    'aria-label' => 'Adresse e-mail',  // Accessibilité
                    'required' => true, // Champ obligatoire
                    'maxlength' => 255, // Limiter la longueur de l'email
                ],
            ])
            // Champ "Description" avec plusieurs lignes et une hauteur spécifique
            ->add('description', TextareaType::class, [
                'label' => '  Reclamation',
                'label_attr' => [
                    'class' => 'font-weight-bold',  // Mettre le label en gras
                    'style' => 'color: #000;'
                ],
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Décrivez votre réclamation ici...',
                    'rows' => 6,  // Augmenter la hauteur du champ pour plus de confort
                    'aria-label' => 'Description',  // Accessibilité
                    'required' => true, // Champ obligatoire
                ],
            ])
            // Champ "Catégorie" avec une sélection
            ->add('categorie', ChoiceType::class, [
                'label' => 'problème',
                'label_attr' => [
                    'class' => 'font-weight-bold', // Mettre le label en gras
                    'style' => 'color: #000;'
                ],
                'choices' => [
                    'Bug Technique' => 'bug_technique',
                    'Problème Paiement' => 'probleme_paiement',
                    'Problème Logistique' => 'probleme_logistique',
                    'Problème Transport' => 'probleme_transport',
                ],
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'aria-label' => 'Catégorie',  // Accessibilité
                ],
                'required' => true, // Champ obligatoire
            ])
            ->add('submit', SubmitType::class, [
                'label' => '📨 Soumettre la réclamation',
                'attr' => [
                    'class' => 'btn btn-primary btn-md btn-block mt-4 mb-5',
                    'aria-label' => 'Soumettre',
                ],
            ])
            
           
             
            
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
