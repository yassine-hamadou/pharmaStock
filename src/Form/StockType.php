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
            ->add('idProduit')
            
            ->add('idFournisseur')

            ->add('dateFourni', DateType::class, [
                'widget' => 'single_text'
            ])

            ->add('dateFabrication', DateType::class, [
                'widget' => 'single_text'
            ])

            ->add('datePeremption', DateType::class, [
                'widget' => 'single_text'
            ])

            ->add('quantite')

            ->add('prixAchat')

            ->add('prixVente')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stock::class,
        ]);
    }
}
