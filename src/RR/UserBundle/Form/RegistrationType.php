<?php
namespace RR\UserBundle\Form;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;

use Padam87\AddressBundle\Form\GeocodedAddressType;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrue as RecaptchaTrue;

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
    ))
    ->add('telephone','text',array('required'=>false))
    ->add('profileImage',new UserImageType(),array('required'=>false))
    ->add('recaptcha', 'ewz_recaptcha', array(
        'attr'        => array(
            'options' => array(
                'theme' => 'light',
                'type'  => 'image'
            )
        )));



}

public function getName()
{
return 'rruserbundle_user_registration';
}
}