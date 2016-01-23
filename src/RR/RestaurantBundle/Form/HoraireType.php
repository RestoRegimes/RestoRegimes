<?php

namespace RR\RestaurantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HoraireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ouverture1')
            ->add('fermeture1')
            ->add('ouverture2')
            ->add('fermeture2')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RR\RestaurantBundle\Entity\Horaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rr_restaurantbundle_horaire';
    }
}
