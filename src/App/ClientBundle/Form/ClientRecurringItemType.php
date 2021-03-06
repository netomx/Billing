<?php

namespace App\ClientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientRecurringItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idType')
            ->add('description')
            ->add('quantity')
            ->add('unitPrice')
            ->add('idRecurring')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\ClientBundle\Entity\ClientRecurringItem'
        ));
    }

    public function getName()
    {
        return 'app_clientbundle_clientrecurringitemtype';
    }
}
