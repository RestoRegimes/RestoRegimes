<?php
namespace RR\CoreBundle\Admin\Commentaire;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CommentaireAdmin extends Admin
{
protected function configureRoutes(RouteCollection $collection)
{
    $collection
        ->remove('create')
        ->remove('delete')
        ->remove('edit')
    ;

}
protected function configureFormFields(FormMapper $formMapper)
{
$formMapper->add('texteCommentaire','textarea',array('label'=>"message",'required'=>true,'attr'=>array('minlength'=>'15','maxlength'=>'4096')))
    ->add('noteCuisine','integer',array('label'=>"note cuisine",'required'=>false,'attr'=>array('min'=>'0','max'=>'10')))
    ->add('noteService','integer',array('label'=>"note service",'required'=>false,'attr'=>array('min'=>'0','max'=>'10')))
    ->add('noteBesoins','integer',array('label'=>"note besoins",'required'=>false,'attr'=>array('min'=>'0','max'=>'10')));
    ;
}

protected function configureDatagridFilters(DatagridMapper $datagridMapper)
{
$datagridMapper->add('texteCommentaire')
    ->add('noteCuisine')
    ->add('noteService')
    ->add('noteBesoins');

}

protected function configureListFields(ListMapper $listMapper)
{
$listMapper->add('texteCommentaire')
    ->add('noteCuisine')
    ->add('noteService')
    ->add('noteBesoins');
}
}