<?php
namespace RR\UserBundle\Form;

use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;
use RR\CoreBundle\Form\AdresseType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\CallbackTransformer;

class EditionType extends BaseType
{
public function buildForm(FormBuilderInterface $builder,
array $options)
{
    parent::buildForm($builder, $options);
    $builder->add('address',new AdresseType(),array(
        'label' => ' ',
        'data_class' => 'Padam87\AddressBundle\Entity\GeocodedAddress',
        'required'=>false
    ))
        ->add($builder->create('telephone','text',array('required'=>false))
            ->addModelTransformer(
                new CallbackTransformer(
                // transform <br/> to \n so the textarea reads easier
                    function ($originalDescription) {

                        return preg_replace("/[0-9]{2}/", "$0 ", $originalDescription);
                    },
                    function ($submittedDescription) {
                        if(!empty($submittedDescription))return preg_replace('/[-. ]/', "",$submittedDescription);
                        else return null;
                    }
                )
            ))
    ->add('profileImage',new UserImageType(),array('required'=>false));



}

public function getName()
{
return 'rruserbundle_user_edition';
}
}