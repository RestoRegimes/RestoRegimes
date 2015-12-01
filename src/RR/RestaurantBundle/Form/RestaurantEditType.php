<?php

namespace RR\RestaurantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RestaurantEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->remove('siret')
        ->remove('lundi')
        ->remove('mardi')
        ->remove('mercredi')
        ->remove('jeudi')
        ->remove('vendredi')
        ->remove('samedi')
        ->remove('dimanche')
        ->remove('images');
    }

    public function getName()
    {
        return 'rr_restaurantbundle_restaurant_edit';
    }

    public function getParent()
    {
        return new RestaurantType();
    }
}