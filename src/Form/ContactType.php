<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom',TextType::class,[
                'label'=>'Prénom'
            ])
            ->add('nom',TextType::class,[
                'label'=>'Nom'
            ])
            ->add('email',EmailType::class,[
                'label'=>'Adresse mail'
            ])
            ->add('content',TextareaType::class,[
                'label'=>'Contenu',
                'attr'=>[
                    'placeholder'=>'En quoi pouvons-nous vous aider ?'
                ]
            ])
            ->add('submit',SubmitType::class,[
                'label'=>'Envoyer',
                'attr'=>[
                    'class'=>'btn-block btn-success'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
