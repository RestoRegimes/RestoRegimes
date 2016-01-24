<?php
namespace RR\CoreBundle\Admin\SiteContent;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use RR\CoreBundle\Form\SiteImageType;

class SiteContentAdmin extends Admin
{
protected function configureFormFields(FormMapper $formMapper)
{
$formMapper->add('type_content', 'choice', array('label'=>'type',
    'choices'  => array(
        'FAQ' => 'FAQ',
        'HOME' => 'HOME',
        'A_PROPOS' => 'A_PROPOS',
        'MENTION'=>'MENTION',
        'CGU'=>'CGU',
        'ANNONCE'=>'ANNONCE',
        'NEWS'=>'NEWS'
    ),
    'choices_as_values' => true,
    ))
    ->add('title','text',array('required'=>false,'label'=>'titre'))
    ->add('subtitle','text',array('required'=>false,'label'=>'sous-titre'))
    ->add('content','textarea',array('required'=>false,'label'=>'contenu'))
    ->add('footer','text',array('required'=>false,'label'=>'pied de page'))
    ->add('image',new SiteImageType(),array('required'=>false,'label'=>'image'))
    ->add('enabled','checkbox',array('required'=>false,'label'=>'en ligne'));
}

protected function configureDatagridFilters(DatagridMapper $datagridMapper)
{
$datagridMapper->add('typeContent')
    ->add('title')
    ->add('subtitle')
    ->add('content')
    ->add('footer')
    ->add('image.imageName')
    ->add('enabled');
}

protected function configureListFields(ListMapper $listMapper)
{
$listMapper->add('type_content','string',array('label'=>'type'))
    ->add('title','string',array('label'=>'titre'))
    ->add('subtitle','string',array('label'=>'sous-titre'))
    ->add('content','string',array('label'=>'contenu'))
    ->add('footer','string',array('label'=>'pied de page'))
    ->add('image.imageName','string',array('label'=>'image'))
    ->add('enabled','string',array('label'=>'en ligne'))
    ->add('_action', 'actions', array(
        'actions' => array(
            'show' => array(),
            'edit' => array(),
            'delete' => array(),
        )
    ));
}
}