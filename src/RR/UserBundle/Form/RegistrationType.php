<?php
namespace RR\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Padam87\AddressBundle\Form\GeocodedAddressType;

class RegistrationType extends BaseType
{
public function buildForm(FormBuilderInterface $builder,
array $options)
{
    parent::buildForm($builder, $options);
    $builder->add('address',new GeocodedAddressType(),array(
    'label' => 'Adresse',
    'data_class' => 'Padam87\AddressBundle\Entity\GeocodedAddress',
    'required'=>false
    ));

}

public function getName()
{
return 'rruserbundle_user_registration';
}
}