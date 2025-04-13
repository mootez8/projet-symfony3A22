<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Event;
use App\Repository\SponsorRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Sponsor;

class EventType extends AbstractType
{
    private SponsorRepository $sponsorRepository;

    public function __construct(SponsorRepository $sponsorRepository)
    {
        $this->sponsorRepository = $sponsorRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $sponsors = $this->sponsorRepository->findAll();

        $builder
        ->add('nomEv', TextType::class, [
            'label' => 'Nom du l\'evenement',
            'required' => true,
            'empty_data' => '', 
        ])
        ->add('description', TextType::class, [
            'label' => 'Description',
            'required' => true,
            'empty_data' => '', 
        ])
        ->add('dateEvent', DateType::class, [
            'label' => 'Date de l\'événement',
            'widget' => 'single_text',
            'html5' => true,
            'empty_data' => null,
            'attr' => [
                'class' => 'form-control',
                'min' => (new \DateTime())->format('Y-m-d')
            ],
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\GreaterThanOrEqual('today')
            ]
        ])
        ->add('lieu', TextType::class, [
            'label' => 'Lieu',
            'required' => true,
            'empty_data' => '', 
        ])
            ->add('sponsor', EntityType::class, [  
                'class' => Sponsor::class,      
                'choice_label' => 'nomSponsor',   
                //'placeholder' => 'Choisir un sponsor',
                'label' => 'Sponsor',
                'required' => true,             
            ]);

            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
