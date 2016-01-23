<?php

namespace RR\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\CallbackTransformer;

class SiteContentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type_content','text')
            ->add('title','text',array('required'=>false))
            ->add('subtitle','text',array('required'=>false))
            ->add('content1','textarea',array('required'=>false))
            ->add('content2','textarea',array('required'=>false))
            ->add('content3','textarea',array('required'=>false))
            ->add('footer','text',array('required'=>false))
            ->add('image',new SiteImageType(),array('required'=>false))
            ->add('enabled','checkbox',array('required'=>false));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RR\CoreBundle\Entity\SiteContent'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rr_corebundle_sitecontent';
    }
}
