<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nbr_places', IntegerType::class, [
                'label' => 'Nombre de Places',
                'constraints' => [
                    new NotBlank(['message' => 'Le nombre de places est obligatoire.']),
                ],
            ])
            ->add('offre', EntityType::class, [
                'class' => Offre::class,
                'choice_label' => function (Offre $offre) {
                    return sprintf('%d', $offre->getId());
                },
                'label' => 'Offre',
                'constraints' => [
                    new NotBlank(['message' => 'L\'offre ne peut pas être vide.']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // ...
        ]);
    }
}