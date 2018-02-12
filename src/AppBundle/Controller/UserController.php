<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Type\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/user", name="user_")
 */
class UserController extends Controller {

  /**
   * @Route("/create", name="create")
   */
   public function createAction(Request $request) {
     $user = new User();
     $userForm = $this->createForm(UserType::class, $user);

     $userForm->handleRequest($request);

     if($userForm->isValid()) {
       $em = $this->getDoctrine()->getManager();

       $em->persist($user);
       $em->flush();

       $this->addFlash('success', 'The user has been successfully added :)');

       return $this->redirectToRoute('show_list');
     }

     return $this->render('user/create.html.twig', ['userForm' => $userForm->createView()]);
   }


}
