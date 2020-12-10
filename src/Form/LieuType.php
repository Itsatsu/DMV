<?php

namespace App\Form;

use App\Entity\Lieu;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LieuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Ex: La Cité du Vin',
                    'class' => 'w-100'
                )
            ))
            ->add('description',TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Ex: La Cité du Vin à Bordeaux est un lieu culturel
                     unique au monde qui invite à la découverte du vin à travers le monde,
                      à travers l\'histoire, dans toutes les cultures et civilisations.',
                    'class' => 'w-100'
                )
            ))
            ->add('photo',TextType::class,array(
        'attr' => array(
            'placeholder' => 'Ex: https://vivrebordeaux.fr/wp-content/uploads/2017/09/cite-du-vin-1.jpg',
            'class' => 'w-100'
        )
    ))
            ->add('type',TextType::class,array(
        'attr' => array(
            'placeholder' => 'Ex: Musée',
            'class' => 'w-100'
        )
    ))
            ->add('prix',TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Ex: Adulte plein tarif 20,00€',
                    'class' => 'w-100'
                )
            ))
            ->add('horaires',TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Ex: Du lundi au vendredi de 10h à 18h',
                    'class' => 'w-100'
                )
            ))
            ->add('adresse',TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Ex: 134 Quai de Bacalan, 33300 Bordeaux',
                    'class' => 'w-100'
                )
            ))
            ->add('transport',TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Ex: Tram B La Cité du Vin',
                    'class' => 'w-100'
                )
            ))
            ->add('evenement',TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Ex: Diner de Gala – 28 janvier 2021',
                    'class' => 'w-100'
                )
            ))
            ->add('site_internet',TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Ex: https://www.laciteduvin.com',
                    'class' => 'w-100'
                )
            ))
            ->add('lien_maps',TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Ex: https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d11312.44844210809!2d-0.5574710901272587!3d44.86001241912057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sla%20cit%C3%A9%20du%20vin!5e0!3m2!1sfr!2sfr!4v1605779867547!5m2!1sfr!2sfr',
                    'class' => 'w-100'
                )
            ))
            ->add('code_postal',IntegerType::class,array(
                'attr' => array(
                    'placeholder' => 'Ex: 33',
                    'class' => 'w-100'
                )
            ))
            ->add('VilleReferente',TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Ex: Bordeaux',
                    'class' => 'w-100'
                )
            ))
            ->add('notre_selection',CheckboxType::class,array(
                'required' => false,
                'attr' => array(
                    'class' => 'w-100',

                    'value' => '0'
                )
            ))
            ->add('plus_visite',CheckboxType::class,array(
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
            'data_class' => Lieu::class,
        ]);
    }
}
