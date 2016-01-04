<?php
namespace RR\UserBundle\Form;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use RR\CoreBundle\Form\AdresseType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationType extends BaseType
{
public function buildForm(FormBuilderInterface $builder,
array $options)
{
    parent::buildForm($builder, $options);
    $builder->add('adresse',new AdresseType(),array(
    'label' => 'Adresse',
    'required'=>false
    ))
    ->add('telephone','text',array('required'=>false))
    ->add('profileImage',new UserImageType(),array('required'=>false))
    ->add('recaptcha', 'ewz_recaptcha');



}

public function getName()
{
return 'rruserbundle_user_registration';
}
}