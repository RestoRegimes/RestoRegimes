<?php

namespace RR\DataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('radius','integer',array('label'=>"",'required'=>false))
            ->add('lat',null,array( 'required'=>false,'label'=>" "))
            ->add('lng',null,array( 'required'=>false,'label'=>" "))
        ;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'rr_databundle_search';
    }
}
