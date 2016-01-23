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
$formMapper->add('type_content','text')
    ->add('title','text',array('required'=>false))
    ->add('subtitle','text',array('required'=>false))
    ->add('content1','textarea',array('required'=>false))
    ->add('content2','textarea',array('required'=>false))
    ->add('content3','textarea',array('required'=>false))
    ->add('footer','text',array('required'=>false))
    ->add('image',new SiteImageType(),array('required'=>false))
    ->add('enabled','checkbox',array('required'=>false));
}

protected function configureDatagridFilters(DatagridMapper $datagridMapper)
{
$datagridMapper->add('typeContent')
    ->add('title')
    ->add('subtitle')
    ->add('content1')
    ->add('content2')
    ->add('content3')
    ->add('footer')
    ->add('image')
    ->add('enabled');
}

protected function configureListFields(ListMapper $listMapper)
{
$listMapper->add('type_content')
    ->add('title')
    ->add('subtitle')
    ->add('content1')
    ->add('content2')
    ->add('content3')
    ->add('footer')
    ->add('image')
    ->add('enabled');
}
}