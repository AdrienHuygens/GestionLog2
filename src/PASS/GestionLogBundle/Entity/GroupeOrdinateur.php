<?php

namespace PASS\GestionLogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * GroupeOrdinateur
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="PASS\GestionLogBundle\Entity\GroupeOrdinateurRepository")
 */
class GroupeOrdinateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif;

    /**
     *
     * @ORM\Column(name="ordinateurs", type="array")                                             
     * 
     */
    private $ordinateurs;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return GroupeOrdinateur
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
     * Set description
     *
     * @param string $description
     * @return GroupeOrdinateur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return GroupeOrdinateur
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set ordinateurs
     *
     * @param array $ordinateurs
     * @return GroupeOrdinateur
     */
    public function setOrdinateurs($ordinateurs)
    {
        $this->ordinateurs[] = $ordinateurs;

        return $this;
    }

    /**
     * Get ordinateurs
     *
     * @return array 
     */
    public function getOrdinateurs()
    {
        return $this->ordinateurs;
    }
    
     public function __construct()
    {
        $this->ordinateurs = array();
    }
    public function __toString() {
        return $this->nom;
    }

    /**
     * Add ordinateur
     *
     * @param \PASS\GestionLogBundle\Entity\Systemevents $ordinateur
     * @return GroupeOrdinateur
     */
    public function addOrdinateur($ordinateur)
    {
        $this->ordinateurs[] = $ordinateur;

        return $this;
    }

    /**
     * Remove ordinateur
     *
     * @param \PASS\GestionLogBundle\Entity\Systemevents $ordinateur
     */
    public function removeOrdinateur($ordinateur)
    {
        $this->ordinateurs->removeElement($ordinateur);
    }
    
    
   public function getSql(){
       
   }
}
