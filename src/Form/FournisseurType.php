<?php

namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomFournisseur', TextType::class, [
                'label' => 'Nom du fournisseur',
                'attr' => [
                    'placeholder' => 'Ex: PharmaPure',
                    'class' => 'form-control mb-3'
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Numero de Téléphone',
                'attr' => [
                    'placeholder' => 'Ex: +22798858493',
                    'class' => 'form-control mb-3'
                ]
            ])
            ->add('email', TextType::class, [
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'Ex: email@gmail.com',
                    'class' => 'form-control mb-3'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
        ]);
    }
}
