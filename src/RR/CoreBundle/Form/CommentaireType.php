<?php

namespace RR\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\CallbackTransformer;

class CommentaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('texteCommentaire','textarea',array('label'=>"message",'required'=>true,'attr'=>array('minlength'=>'15','maxlength'=>'4096')))
            ->add('noteCuisine','integer',array('label'=>"note cuisine",'required'=>false,'attr'=>array('min'=>'0','max'=>'10')))
            ->add('noteService','integer',array('label'=>"note service",'required'=>false,'attr'=>array('min'=>'0','max'=>'10')))
            ->add('noteBesoins','integer',array('label'=>"note besoins",'required'=>false,'attr'=>array('min'=>'0','max'=>'10')));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RR\CoreBundle\Entity\Commentaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rr_corebundle_commentaire';
    }
}
