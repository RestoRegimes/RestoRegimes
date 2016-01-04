<?php

namespace RR\CoreBundle\Form;

use Padam87\AddressBundle\Form\GeocodedAddressType;
use Symfony\Component\Form\FormBuilderInterface;


class AdresseType extends GeocodedAddressType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->remove('country');
        $builder->remove('state');
    }

    public function getName()
    {
        return 'rr_corebundle_adresse';
    }

}
