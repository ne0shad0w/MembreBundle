<?php

namespace ne0shad0w\MembreBundle\MembreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;


use MembreBundle\Entity\MemberInfo;
use MembreBundle\Form\Type\MembreType;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
			return $this->render('MembreBundle:Security:accueil.html.twig');
    }
	
    public function compteAction()
    {
			return $this->render('MembreBundle:Security:accueil.html.twig');
    }

    public function personnelAction(Request $request )
    {
		$userManager = $this->container->get('fos_user.user_manager');		
		$user = $this->get('security.token_storage')->getToken()->getUser();
	
		//$MemberInfo = new MemberInfo();
		$MemberInfo = $this->getDoctrine()->getRepository('MembreBundle:MemberInfo')->find($user->getId() );
		if (!$MemberInfo) {
			$MemberInfo = new MemberInfo();
			$MemberInfo->setIdUser($user);	
		}
			
        $form = $this->createForm(new MembreType(),$MemberInfo);

		$form->handleRequest($request);
		if ($request->getMethod() == 'POST') {
			if ( $form->isValid()  ){
				$em = $this->getDoctrine()->getManager();
								
				$em->persist($MemberInfo);
				$em->flush();
				$this->get('session')->getFlashBag()->add('info', 'Information mise à jour');
			}
		}


        return $this->render('MembreBundle:Security:personnel.html.twig', array('form' => $form->createView()));		
			//return $this->render('MembreBundle:Security:personnel.html.twig');
    }
	
}
