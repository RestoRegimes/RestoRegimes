<?php
namespace RR\RestaurantBundle\Admin\Restaurant;

use Sonata\AdminBundle\Admin\Admin;
use RR\CoreBundle\Form\AdresseType;
use Symfony\Component\Form\CallbackTransformer;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RestaurantAdmin extends Admin
{

protected function configureFormFields(FormMapper $formMapper)
{
$formMapper->add('nom','text')
    ->add($formMapper->create('telephone','text')
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
    ->add('address',new AdresseType(),array(
        'label' => ' ',
        'data_class' => 'Padam87\AddressBundle\Entity\GeocodedAddress'
    ));
}

protected function configureDatagridFilters(DatagridMapper $datagridMapper)
{
$datagridMapper->add('nom')
    ->add('telephone')
    ->add('description')
    ->add('siret')
    ->add('address.zipCode')
    ->add('address.city')
    ->add('address.street');

}

protected function configureListFields(ListMapper $listMapper)
{
$listMapper->add('nom')
    ->add('telephone')
    ->add('description')
    ->add('siret')
    ->add('address.zipCode','string',array('label'=>'code postal'))
    ->add('address.city','string',array('label'=>'ville'))
    ->add('address.street','string',array('label'=>'rue'))
    ->add('_action', 'actions', array(
        'actions' => array(
            'show' => array(),
            'edit' => array(),
            'delete' => array(),
        )
    ));;
}
}