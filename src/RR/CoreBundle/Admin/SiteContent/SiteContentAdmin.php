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
$formMapper->add('type_content', 'choice', array(
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
    ->add('title','text',array('required'=>false))
    ->add('subtitle','text',array('required'=>false))
    ->add('content','textarea',array('required'=>false))
    ->add('footer','text',array('required'=>false))
    ->add('image',new SiteImageType(),array('required'=>false))
    ->add('enabled','checkbox',array('required'=>false));
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
$listMapper->add('type_content')
    ->add('title')
    ->add('subtitle')
    ->add('content')
    ->add('footer')
    ->add('image.imageName')
    ->add('enabled')
    ->add('_action', 'actions', array(
        'actions' => array(
            'show' => array(),
            'edit' => array(),
            'delete' => array(),
        )
    ));
}
}