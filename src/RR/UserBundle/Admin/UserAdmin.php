<?php
namespace RR\UserBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use RR\CoreBundle\Form\AdresseType;
use RR\UserBundle\Form\UserImageType;
use Symfony\Component\Form\CallbackTransformer;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use FOS\UserBundle\Util\LegacyFormHelper;

class UserAdmin extends Admin
{

protected function configureRoutes(RouteCollection $collection)
{
    $collection
        ->remove('create')
    ;

}

protected function configureFormFields(FormMapper $formMapper)
{
$formMapper
    ->add('profileImage',new UserImageType(),array('required'=>false))
    ->add('enabled');
}

protected function configureDatagridFilters(DatagridMapper $datagridMapper)
{
$datagridMapper->add('email')
    ->add('username')
    ->add('address.zipCode')
    ->add('address.city')
    ->add('address.street')
    ->add('telephone')
    ->add('enabled');

}

protected function configureListFields(ListMapper $listMapper)
{
$listMapper->add('email','string',array('label'=>'e-mail'))
    ->add('username','string',array('label'=>'nom'))
    ->add('address.zipCode','string',array('label'=>'code postal'))
    ->add('address.city','string',array('label'=>'ville'))
    ->add('address.street','string',array('label'=>'rue'))
    ->add('telephone')
    ->add('enabled','boolean',array('label'=>'valide'))
    ->add('_action', 'actions', array(
        'actions' => array(
            'show' => array(),
            'edit' => array(),
            'delete' => array(),
        )
    ));
}
}