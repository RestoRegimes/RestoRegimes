<?php
namespace RR\UserBundle\Form;

use FOS\UserBundle\Form\Type\ChangePasswordFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;

class ChangePasswordType extends BaseType
{
public function buildForm(FormBuilderInterface $builder,
array $options)
{
    parent::buildForm($builder, $options);
    $builder->remove('current_password');

}

public function getName()
{
return 'rruserbundle_user_change_password';
}
}