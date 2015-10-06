<?php
// MembreBundle/Form/Type/MembreType.php
namespace ne0shad0w\MembreBundle\MembreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MembreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$now = new \DateTime();

		$builder->add('prenom','text',array(		'required' => true,
												'label'=> 'Prénom',
												'attr' => array()
											));
        $builder->add('Nom','text',array(		'required' => true,
												'label'=> 'Nom',
												'attr' => array()
											));
		$builder->add('addresse','text',array(		'required' => true,
												'label'=> 'Adresse',
												'attr' => array()
											));
		$builder->add('codePostal','text',array(		'required' => true,
												'label'=> 'Code postal',
												'attr' => array()
											));
		$builder->add('ville','text',array(		'required' => true,
												'label'=> 'Ville',
												'attr' => array()
											));
		$builder->add('province','choice',array('choices'=> array('AB'=>'Alberta','BC'=>'Colombie-Britanique','PE'=>'Île-du-Prince-Édouard','MB'=>'Manitoba','NB'=>'Nouveau-Brunswick','NS'=>'Nouvelle-Écosse','ON'=>'Ontario','QC'=>'Québec','SK'=>'Saskatchewan','NL'=>'Terre-Neuve-et-Labrador') ));
		$builder->add('dateNaissance','date',array(
												'input' => 'datetime', 
												'widget' => 'choice' ,
												'required' => true,
												'label'=> 'Date de naissance',
												'years' => range(1900,$now->format('Y')),
												'attr' => array()
											));
		$builder->add('Enregistrer','submit',array('label'=>'form.enregistrer'));
    }

    public function getName()
    {
        return 'InformationPersonnelle';
    }

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'ne0shad0w\MembreBundle\MembreBundle\Entity\MemberInfo',
			'cascade_validation' => true ,
			'attr' => array( 'id' => 'edit-infopersonnelle'  )
		)); 
	}
}