<?php

namespace RR\RestaurantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class RestaurantImageType extends AbstractType
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
                ->add('image1',new RestoImageType(),array('required'=>false))
                ->add('image2',new RestoImageType(),array('required'=>false))
                ->add('image3',new RestoImageType(),array('required'=>false))
                ->add('image4',new RestoImageType(),array('required'=>false))
                ->add('image5',new RestoImageType(),array('required'=>false));

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
        return 'rr_restaurantbundle_restaurant_image';
    }
}
