<?php


namespace RR\UserBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use RR\UserBundle\Form\UserType;
use RR\UserBundle\Form\UserEditType;
use RR\UserBundle\Entity\User;
use RR\UserBUndle\Entity\TypeUser;

class UserController extends Controller
{
    public function indexAction($page)
    {

        if ($page < 1) {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }
        $nbPerPage=3;

        $listUsers = $this->getDoctrine()
            ->getManager()
            ->getRepository('RRUserBundle:User')
            ->getUsers($page,$nbPerPage)
        ;
        $nbPage=ceil(count($listUsers)/$nbPerPage);

        if($page>$nbPage){
            return $this->redirect($this->generateUrl('rr_core_homepage'));
        }

        return $this->render('RRUserBundle:User:index.html.twig', array(
            'listUsers' => $listUsers,
            'nbPages'=>$nbPage,
            'page'=>$page
        ));

    }

    public function viewAction($id)
    {// On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // Pour récupérer un utilisateur unique : on utilise find()
        $user = $em->getRepository('RRUserBundle:User')->find($id);

        // On vérifie que l'utilisateur avec cet id existe bien
        if ($user === null) {
            throw $this->createNotFoundException("L'utilisateur d'id ".$id."n'existe pas.");
        }

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte les variables :
        return $this->render('RRUserBundle:User:view.html.twig', array(
            'user'           => $user,
        ));
    }

    public function addAction(Request $request)
    {
        $user = new User();

        // J'ai raccourci cette partie, car c'est plus rapide à écrire !
        $form = $this->get('form.factory')->create(new UserType, $user);
        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $user contient les valeurs entrées dans le formulaire par le visiteur
        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        if ($form->isValid()) {

            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Utilisateur bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('rr_user_view', array('id' => $user->getId())));
        }

        // À ce stade, le formulaire n'est pas valide car :
        // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
        // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
        return $this->render('RRUserBundle:User:add.html.twig', array(
            'form' => $form->createView(),
            'action' => "add"
        ));

    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $user = $em->getRepository('RRUserBundle:User')->Find($id);

        if (null === $user) {
            throw new NotFoundHttpException("L'utilisateur d'id ".$id." n'existe pas.");
        }


        $form = $this->createForm(new UserEditType(), $user);

        if ($form->handleRequest($request)->isValid()) {

            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Utilisateur bien modifié.');

            return $this->redirect($this->generateUrl('rr_user_view', array('id' => $user->getId())));
        }

        return $this->render('RRUserBundle:User:add.html.twig', array(
            'form'   => $form->createView(),
            'utilisateur' => $user ,
            'action' => 'edit'
        ));
    }

    public function deleteAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $user = $em->getRepository('RRUserBundle:User')->find($id);

        if (null === $user) {
            throw new NotFoundHttpException("L'utilisateur d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'utilisateur contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "L'utilisateur a bien été supprimée.");

            return $this->redirect($this->generateUrl('rr_user_home'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('RRUserBundle:User:delete.html.twig', array(
            'user' => $user,
            'form'   => $form->createView()
        ));
    }

    public function menuAction($limit=3)
    {
        $listUsers = $this->getDoctrine()
            ->getManager()
            ->getRepository('RRUsertBundle:User')
            ->findBy(
                array(),                 // Pas de critère
                $limit,                  // On sélectionne $limit annonces
                0                        // À partir du premier
            );

        return $this->render('RRUserBundle:User:menu.html.twig', array(
            'listAdverts' => $listUsers
        ));
    }



}