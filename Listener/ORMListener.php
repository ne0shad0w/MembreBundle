<?php
namespace ne0shad0w\MembreBundle\MembreBundle\Listener;

use FOS\UserBundle\Doctrine\UserManager;

use Doctrine\ORM\Event\LifecycleEventArgs;
use ne0shad0w\MembreBundle\MembreBundle\Entity\MemberInfo ;

class ORMListener
{

    public function postPersist(LifecycleEventArgs $args  )
    {
			//$userManager = $this->get('fos_user.user_manager');
			
			$entity = $args->getEntity();
			$em = $args->getEntityManager();
			//$user = $em->findUserByUsername($entity);
			if($entity instanceof \ne0shad0w\ZephyrAdminCoreBundle\ZephyrAdminCoreBundle\Entity\FosUser ) {
			//	print_r($entity) ;
				$info = new MemberInfo();
				$item = $em->getRepository('\ne0shad0w\ZephyrAdminCoreBundle\ZephyrAdminCoreBundle\Entity\FosUser')->find($entity->getId() );
				$info->setIdUser( $item );				
				$em->persist($info);
				$em->flush();
			}  
	}



}