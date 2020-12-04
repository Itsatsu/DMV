<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class,array(
                'label' => 'Votre nom',
                'attr' => array(
                    'placeholder' => 'Votre nom',
                    'class' => 'widthinput'
                )
            ))
            ->add('prenom',TextType::class,array(
                'label' => 'Votre prénom',
                'attr' => array(
                    'placeholder' => 'Votre prénom',
                    'class' => 'widthinput'
                )
            ))
            ->add('email',TextType::class,array(
                'label' => 'Votre adresse email',
                'attr' => array(
                    'placeholder' => 'Votre @ email',
                    'class' => 'widthinput'
                )
            ))
            ->add('departement',TextType::class,array(
                'label' => 'Votre département',
                'attr' => array(
                    'placeholder' => 'Votre département',
                    'class' => 'widthinput'
                )
            ))
            ->add('ville',TextType::class,array(
                'label' => 'Ville du lieu',
                'attr' => array(
                    'placeholder' => 'Ville du lieu',
                    'class' => 'widthinput'
                )
            ))
            ->add('code_postal',IntegerType::class,array(
                'label' => 'Code postal du lieu',
                'attr' => array(
                    'placeholder' => 'Code postal du lieu',
                    'class' => 'widthinput'
                )
            ))
            ->add('lien_site',TextType::class,array(
                'label' => 'Lien site web du lieu',
                'attr' => array(
                    'placeholder' => 'Lien web du lieu',
                    'class' => 'w-100'
                )
            ))
            ->add('objet',TextType::class,array(
                'label' => 'Objet du commantaire',
                'attr' => array(
                    'placeholder' => 'Objet',
                    'class' => 'w-100'
                )
            ))
            ->add('commantaire',TextareaType::class,array(
                'label' => 'votre commentaire',
                'attr' => array(
                    'placeholder' => 'Un commentaire, une idée?',
                    'class' => 'w-100',
                    'rows' => '5',
                    'cols' => '33'
                )
            ))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
