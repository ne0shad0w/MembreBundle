<?php

namespace ne0shad0w\MembreBundle\MembreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MembreBundle extends Bundle
{
	public function adm_module(){		
		return true;
	}

	public function user_module(){		
		return true;
	}
	
	public function menu_module($lang){	
		//$translator = new Translator($lang);
		return $menu = array('titre'=>'menu.compte', 
							'sousmenu'=> array( 
											'membre.profile.edit'=>'fos_user_profile_edit', 
											'membre.profile.personnel'=>'info_personnel'
											) 
							);
	}

}
