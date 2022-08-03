<?php

namespace App\Form;
 
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('productName', TextType::class, [
                'label' => 'Nom du produit',
                'attr' => [
                    'class' => 'form-control mb-3'
                ],
            ])

            ->add('description', null, [
                // need to ask for what let me make a description field form the cmd when genrating the form
                'label' => 'Description',
                'attr' => [
                    'class' => 'form-control mb-3',
                    'rows' => '5',
                    'style' => 'resize: none'
                ],
            ])
            
            ->add('category', EntityType::class, [
                'label' => 'Catégorie',
                'class' => 'App\Entity\ProductType',
                'choice_label' => 'nomCategory',
                'attr' => [
                    'class' => 'form-control mb-3'
                ],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
