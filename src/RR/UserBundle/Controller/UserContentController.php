<?php


namespace RR\UserBundle\Controller;

// N'oubliez pas ce use :

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class UserContentController extends Controller
{
    public function showfavoriAction()
    {
        $user=$this->getUser();
        if($user!==null && $this->getUser()->getRoles()[0]=="ROLE_USER"){
            $listRestaurants = $this->getDoctrine()
                ->getManager()
                ->getRepository('RRUserBundle:User')
                ->getRestoFavori($user->getId())
            ;
           // var_dump($listRestaurants[0]->getFavoris());
            return $this->render('RRUserBundle:user:favorite_resto.html.twig', array(
                'listRestaurants' => $listRestaurants[0]->getFavoris(),
            ));
        }else  return $this->render('RRCoreBundle:Default:layout.html.twig',array());
    }

    public function showprorestoAction()
    {
        $user=$this->getUser();
        if($user!==null && $this->getUser()->getRoles()[0]=="ROLE_PRO"){
            $listRestaurants = $this->getDoctrine()
                ->getManager()
                ->getRepository('RRRestaurantBundle:Restaurant')
                ->getRestoByPro($user->getId())
            ;
            // var_dump($listRestaurants[0]->getFavoris());
            return $this->render('RRUserBundle:pro:pro_resto.html.twig', array(
                'listRestaurants' => $listRestaurants,
            ));
        }else  return $this->render('RRCoreBundle:Default:layout.html.twig',array());
    }

    public function  deleteaccountAction(Request $request)
    {
        $user=$this->getUser();
        if($user!==null && $user->getRoles()[0]!="ROLE_ADMIN" )
        {
            $em = $this->getDoctrine()->getManager();


            $form = $this->createFormBuilder()->getForm();

            if ($form->handleRequest($request)->isValid())
            {
                if($user->getRoles()[0]=="ROLE_PRO")
                {
                    $listRestaurants = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('RRRestaurantBundle:Restaurant')
                        ->getRestoByPro($user->getId());

                    foreach ($listRestaurants as $restaurant)
                    {
                        $restaurant->setProprietaire(null);
                        $em->persist($restaurant);
                    }
                }


                $em->remove($user);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', "Le compte a bien été supprimée.");

                return $this->redirect($this->generateUrl('fos_user_security_login'));
            }

            // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
            return $this->render('RRUserBundle:user:delete.html.twig', array(
                'form' => $form->createView()
            ));
        }else return $this->render('RRCoreBundle:Default:layout.html.twig',array());
    }

}