<?php

namespace RR\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RRCoreBundle:Default:layout.html.twig',array());
    }
    public function rechercheAction()
    {
        return $this->render('RRCoreBundle:Default:search.html.twig',array());
    }
}
