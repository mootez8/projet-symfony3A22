<?php

// src/Form/ReponseType.php

namespace App\Form;

use App\Entity\Reponse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType; // Utilisation de TextareaType pour la réponse
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
            // Ajouter le champ id_reclamation comme texte en lecture seule
            ->add('id_reclamation', TextType::class, [
                'label' => 'ID de la réclamation',
            
                'attr' => [
                    'readonly' => 'readonly',  // Rendre le champ non modifiable
                    'class' => 'form-control',
                ],
                'disabled' => false, // Optionnel si tu veux aussi le désactiver dans le formulaire
            ])
            // Ajouter le champ pour la réponse (utilisation de TextareaType pour une plus grande zone de saisie)
            ->add('reponse', TextareaType::class, [
                'label' => 'Votre réponse',
                'attr' => [
                    'placeholder' => 'Écrivez votre réponse ici', // Texte d'instruction
                    'class' => 'form-control', // Appliquer la classe pour un bon style
                    'rows' => 5, // Définir la hauteur de la zone de texte
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponse::class,
        ]);
    }
}
