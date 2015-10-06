<?php

namespace ne0shad0w\MembreBundle\MembreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * MemberInfo
 *
 * @ORM\Table(name="member_info")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class MemberInfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=500, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=500, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse", type="text", length=65535, nullable=true)
     */
    private $addresse;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=6, nullable=true)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=150, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=100, nullable=true)
     */
    private $province;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date", nullable=true)
     */
    private $datenaissance;

    /**
     * @var \FosUser
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="\ne0shad0w\ZephyrAdminCoreBundle\ZephyrAdminCoreBundle\Entity\FosUser" )
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;



    /**
     * Set nom
     *
     * @param string $nom
     * @return MemberInfo
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return MemberInfo
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set addresse
     *
     * @param string $addresse
     * @return MemberInfo
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;
    
        return $this;
    }

    /**
     * Get addresse
     *
     * @return string 
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     * @return MemberInfo
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    
        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return MemberInfo
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set province
     *
     * @param string $province
     * @return MemberInfo
     */
    public function setProvince($province)
    {
        $this->province = $province;
    
        return $this;
    }

    /**
     * Get province
     *
     * @return string 
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return MemberInfo
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    
        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set idUser
     *
     * @param \ne0shad0w\ZephyrAdminCOreBundle\ZephyrAdminCoreBundle\Entity\FosUser $idUser
     * @return MemberInfo
     */
    public function setIdUser(\ne0shad0w\ZephyrAdminCOreBundle\ZephyrAdminCoreBundle\Entity\FosUser $idUser)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return \AppBundle\Entity\FosUser 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
	
}
