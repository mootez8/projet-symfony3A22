<?php
namespace App\Form;

use App\Entity\Transport;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class TransportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('capacityTransport', IntegerType::class, [
                'label' => 'Transport Capacity',
                'attr' => ['class' => 'form-control'],
                'required' => true, // important to trigger Symfony validation
            ])
            ->add('typeTransport', ChoiceType::class, [
                'label' => 'Type of Transport',
                'choices' => [
                    'Bus' => 'Bus',
                    'Car' => 'Car',
                    'Van' => 'Van',
                ],
                'expanded' => true,  
                'multiple' => false,
                'required' => true,
            ])
            ->add('statusTransport', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Available' => 'Available',
                    'Unavailable' => 'Unavailable',
                    'Under Maintenance' => 'Under Maintenance',
                ],
                'expanded' => true,  
                'multiple' => false,
                'required' => true,
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
