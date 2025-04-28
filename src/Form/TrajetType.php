<?php

// src/Form/TrajetType.php
namespace App\Form;

use App\Entity\Trajet;
use App\Entity\Transport;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\NotNull;

class TrajetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('departure', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Departure is required.']),
                    new Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'Departure must be at least {{ limit }} characters.',
                        'maxMessage' => 'Departure cannot be longer than {{ limit }} characters.'
                    ]),
                ],
            ])
            ->add('destination', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Destination is required.']),
                    new Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'Destination must be at least {{ limit }} characters.',
                        'maxMessage' => 'Destination cannot be longer than {{ limit }} characters.'
                    ]),
                ],
            ])
            ->add('schedule', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Schedule',
                'constraints' => [
                    new NotNull(['message' => 'Schedule must be provided.']),
                ],
            ])
            ->add('price', NumberType::class, [
                'constraints' => [
                    new NotNull(['message' => 'Price is required.']),
                    new Positive(['message' => 'Price must be a positive number.']),
                ],
            ])
            ->add('created', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Created At',
                'constraints' => [
                    new NotNull(['message' => 'Creation date is required.']),
                ],
            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'Disponible' => 'dispo',
                    'Indisponible' => 'indispo',
                    'En attente' => 'pending'
                ],
                'required' => false,
                'placeholder' => 'Choose a status',
            ])
            ->add('rating', NumberType::class, [
                'constraints' => [
                    new NotNull(['message' => 'Rating is required.']),
                    new Range([
                        'min' => 0,
                        'max' => 5,
                        'notInRangeMessage' => 'Rating must be between {{ min }} and {{ max }}.',
                    ]),
                ],
            ])
            ->add('transport', EntityType::class, [
                'class' => Transport::class,
                'choice_label' => 'id',
                'constraints' => [
                    new NotNull(['message' => 'Transport must be selected.']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trajet::class,
        ]);
    }
}
