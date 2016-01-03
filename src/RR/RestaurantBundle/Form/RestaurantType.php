<?php

namespace RR\RestaurantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\CallbackTransformer;
use Padam87\AddressBundle\Form\GeocodedAddressType;

class RestaurantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add($builder->create('telephone','text')
                ->addModelTransformer(
                    new CallbackTransformer(
                    // transform <br/> to \n so the textarea reads easier
                        function ($originalDescription) {

                            return preg_replace("/[0-9]{2}/", "$0 ", $originalDescription);
                        },
                        function ($submittedDescription) {
                            return preg_replace('/[-. ]/', "",$submittedDescription);
                        }
                    )
                ))
            ->add('description','textarea',array('required'=>false))
            ->add('siret','text')
            ->add('regimes','entity', array(
                'class'    => 'RRRestaurantBundle:Regime',
                'property' => 'libelle',
                'expanded' => true,
                'multiple' => true))
            ->add('address',new GeocodedAddressType(),array(
                    'label' => 'Adresse',
                'data_class' => 'Padam87\AddressBundle\Entity\GeocodedAddress'

            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RR\RestaurantBundle\Entity\Restaurant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rr_restaurantbundle_restaurant';
    }
}
