<?php

namespace App\Form;

use App\Entity\Stock;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idProduit', null, [
                'label' => 'Produit',
                'attr' => [
                    'class' => 'form-control mb-3 col-10'
                ],
            ])
            
            ->add('idFournisseur', null, [
                'label' => 'Fournisseur',
                'attr' => [
                    'class' => 'form-control mb-3'
                ],
            ])

            ->add('dateFourni', DateType::class, [
                'label' => 'Date fourni',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control mb-3'
                ],
            ])

            ->add('dateFabrication', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de fabrication',
                'attr' => [
                    'class' => 'form-control mb-3'
                ],
            ])

            ->add('datePeremption', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de péremption',
                'attr' => [
                    'class' => 'form-control mb-3'
                ],
            ])

            ->add('quantite', null, [
                'label' => 'Quantité',
                'attr' => [
                    'class' => 'form-control mb-3'
                ],
            ])

            ->add('prixAchat', null, [
                'label' => 'Prix d\'achat',
                'attr' => [
                    'class' => 'form-control mb-3'
                ],
            ])

            ->add('prixVente', null, [
                'label' => 'Prix de revente',
                'attr' => [
                    'class' => 'form-control mb-3'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stock::class,
        ]);
    }
}
