<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\NotBlank;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Excluding id_offre from the form or making it readonly if needed
            ->add('id', IntegerType::class, [
                'label' => 'ID de l\'offre',
                'required' => false,  // Optional field (auto-generated)
                'attr' => ['readonly' => true],  // Make readonly if editing an existing offer
            ])
            ->add('prix_offre', NumberType::class, [
                'label' => 'Prix de l\'offre',
                'constraints' => [
                    new Positive(['message' => 'Le prix de l\'offre doit être un nombre positif.']),
                    new NotBlank(['message' => 'Le prix ne peut pas être vide.']),
                ],
            ])
            ->add('description_offre', TextareaType::class, [
                'label' => 'Description de l\'offre',
                'required' => false,
                'attr' => [
                    'rows' => 5, 
                    'placeholder' => 'Entrez la description de l\'offre ici...',  // Added placeholder
                ],
            ])
            ->add('id_event', IntegerType::class, [
                'label' => 'ID de l\'événement',
                'constraints' => [
                    new Positive(['message' => 'L\'ID de l\'événement doit être un nombre positif.']),
                    new NotBlank(['message' => 'L\'ID de l\'événement ne peut pas être vide.']),
                ],
            ])
            ->add('nbr_placesDis', IntegerType::class, [
                'label' => 'Nombre de places disponibles',
                'constraints' => [
                    new Positive(['message' => 'Le nombre de places doit être un nombre positif.']),
                ],
                'attr' => ['min' => 0],  // Optional: ensure positive values
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
