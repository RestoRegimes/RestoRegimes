<?php
// src/OC/PlatformBundle/DoctrineListener/ApplicationNotification.php

namespace RR\RestaurantBundle\DoctrineListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use RR\RestaurantBundle\Entity\Restaurant;

class ApplicationNotification
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        // On veut envoyer un email que pour les entités Application
        if (!$entity instanceof Application) {
            return;
        }

        $message = new \Swift_Message(
            'Nouveau restaurant',
            'Vous avez enregistré un nouveau restaurant.'
        );

        $message
            ->addTo($entity->getNom()->getAuthor()) // Ici bien sûr il faudrait un attribut "email", j'utilise "author" à la place
            ->addFrom('admin@votresite.com')
        ;

        $this->mailer->send($message);
    }
}