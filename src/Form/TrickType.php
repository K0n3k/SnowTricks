<?php

namespace App\Form;

use App\Entity\Group;
use App\Entity\Trick;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrickType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
            ->add('name')
            ->add('description', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => "Description",
                ],
            ])
            ->add('groupId', EntityType::class, [
                'label' => 'Group',
                'class' => Group::class,
                'choice_label' => 'name'
            ])
            ->add('Create_Trick', SubmitType::class, [
                    'attr' => [
                    'class' => 'form-control btn-dark',
                    'type' => 'button',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trick::class,
        ]);
    }
}
