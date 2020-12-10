<?php

namespace App\Form;

use App\Entity\Admin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class,array(
            'label' => 'Votre nom',
            'attr' => array(
                'placeholder' => 'Ex: Loic',
                'class' => 'w-100'
            )
        ))
            ->add('prenom',TextType::class,array(
                'label' => 'Prénom de l\'administrateur',
                'attr' => array(
                    'placeholder' => 'Ex: Doe',
                    'class' => 'w-100'
                )
            ))
            ->add('email',TextType::class,array(
                'label' => 'Adresse email de l\'administrateur',
                'attr' => array(
                    'placeholder' => 'Ex: loic@mail.com',
                    'class' => 'w-100'
                )
            ))
            ->add('identifiant',TextType::class,array(
                'label' => 'Identifiant de l\'administrateur',
                'attr' => array(
                    'placeholder' => 'Ex: Loic_admin',
                    'class' => 'w-100'
                )
            ))
            ->add('mdp',PasswordType::class,array(
                'label' => 'Mot de passe',
                'attr' => array(
                    'placeholder' => 'Ex: password',
                    'class' => 'w-100'
                )
            ))
            ->add('addadmin',CheckboxType::class,array(
                'label' => 'Lien site web du lieu',
                'required' => false,
                'attr' => array(
                    'class' => 'w-100',

                    'value' => '0'
                )
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Admin::class,
        ]);
    }
}
