<?php

namespace Padam87\AddressBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

/**
 * Default form type for the Address entity
 */
class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('zipcode', 'text', array(
            'required' => false,
            'label'=>'code postal'
        ));
        $builder->add('city', 'text', array(
            'label'=>'ville'
        ));
        $builder->add('street', 'text', array(
            'label'=>'rue'
        ));

        parent::buildForm($builder, $options);
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Padam87\AddressBundle\Entity\Address',
        );
    }

    public function getName()
    {
        return 'address';
    }
}
