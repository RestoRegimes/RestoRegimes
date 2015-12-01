<?php
namespace RR\UserBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }

    public function getName()
    {
        return 'rr_userbundle_user_edit';
    }

    public function getParent()
    {
        return new UserType();
    }
}