<?php
// src/Form/TransportType.php
namespace App\Form;

use App\Entity\Transport;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class TransportType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('capacityTransport')
            ->add('typeTransport', ChoiceType::class, [
                'choices' => [
                    'Bus' => 'Bus',
                    'Car' => 'Car',
                    'Van' => 'Van',
                ],
                'expanded' => true,  // Radio buttons
                'multiple' => false, // Single selection
            ])
            ->add('statusTransport', ChoiceType::class, [
                'choices' => [
                    'Available' => 'Available',
                    'Unavailable' => 'Unavailable',
                    'Under Maintenance' => 'Under Maintenance',
                ],
                'expanded' => true,  // Radio buttons for status
                'multiple' => false, // Single selection
            ])
            ->add('image', FileType::class, [
                'label' => 'Transport Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/*'],
                        'mimeTypesMessage' => 'Please upload a valid image.',
                    ])
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transport::class,
        ]);
    }
}
