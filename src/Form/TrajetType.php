<?php

// src/Form/TrajetType.php
namespace App\Form;

use App\Entity\Trajet;
use App\Entity\Transport;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrajetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('departure')
            ->add('destination')
            ->add('schedule')
            ->add('price')
            ->add('created', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Created At',
            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'Disponible' => 'dispo',
                    'Indisponible' => 'indispo',
                    'En attente' => 'pending'
                ],
                'required' => false,
                'placeholder' => 'Choose a status'
            ])
            ->add('rating')
            ->add('transport', EntityType::class, [
                'class' => Transport::class,
                'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trajet::class,
        ]);
    }
}
