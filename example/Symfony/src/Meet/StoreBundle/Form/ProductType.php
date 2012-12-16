<?php

namespace Meet\StoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('producer')
            ->add('price')
        ;
    }

    public function getName()
    {
        return 'meet_storebundle_producttype';
    }
}
