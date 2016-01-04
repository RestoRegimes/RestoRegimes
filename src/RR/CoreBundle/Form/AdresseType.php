<?php

namespace RR\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\CallbackTransformer;


class AdresseType extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('zipcode', 'text', array(
            'required' => false,
            'label'=>'code postal'
        ));
        $builder->add('city', 'text', array(
            'label'=>'ville'
        ));
        $builder->add('street', 'text', array(
            'label'=>'rue'
        ));


        parent::buildForm($builder, $options);
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'RR\CoreBundle\Entity\Adresse',
        );
    }

    public function getName()
    {
        return 'rr_corebundle_adresse';
    }
}
