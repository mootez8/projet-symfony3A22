<?php

namespace App\Form;

use App\Entity\Sponsor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


class SponsorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nomSponsor', TextType::class, [
            'label' => 'Nom du sponsor',
            'required' => true,
            'empty_data' => '', 
        ])
            ->add('emailSpon'
            , TextType::class, [
                'label' => 'Email du sponsor',
                'required' => true,
                'empty_data' => '', 
            ])
            ->add('contribution',TextType::class, [
                'label' => 'Contribution',
                'required' => true,
                'invalid_message' => 'Veuillez saisir un nombre valide pour la contribution.',
                'empty_data' => '0', 
            ])
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sponsor::class,
        ]);
    }
}  