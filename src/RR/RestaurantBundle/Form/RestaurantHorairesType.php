<?php

namespace RR\RestaurantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class RestaurantHorairesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('nom')
            ->remove('telephone')
            ->remove('description')
            ->remove('siret')
            ->remove('regimes')
            ->remove('address')
            ->add('lundi',new HoraireType(),array('required'=>false))
            ->add('mardi',new HoraireType(),array('required'=>false))
            ->add('mercredi',new HoraireType(),array('required'=>false))
            ->add('jeudi',new HoraireType(),array('required'=>false))
            ->add('vendredi',new HoraireType(),array('required'=>false))
            ->add('samedi',new HoraireType(),array('required'=>false))
            ->add('dimanche',new HoraireType(),array('required'=>false));
    }

    public function getParent()
    {
        return new RestaurantType();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rr_restaurantbundle_restaurant_horaires';
    }
}
