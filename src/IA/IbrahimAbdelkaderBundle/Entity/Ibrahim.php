<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ibrahim
 *
 * @author Lenovo-
 */
namespace IA\IbrahimAbdelkaderBundle\Entity;
use Doctrine\ORM\Mapping as ORM ;
/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="IA\IbrahimAbdelkaderBundle\Entity\IbrahimRepository")
 */
class Ibrahim {
    //put your code here
    /**
     * @ORM\Column(name="idClient",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idClient;
    /**
     *
     * @ORM\Column(name="cin",type="integer")
     * 
     */
    private $cin ;
    /**
     *
     * @ORM\Column(name="nom",type="string",length=200)
     * 
     */
    private $nom ;
    /**
     *
     * @ORM\Column(name="prenom",type="string",length=200)
     * 
     */
    private $prenom ;
    /**
     *
     * @ORM\Column(name="adresse",type="string",length=200)
     * 
     */
    private $adresse ;
    
     /**
     * Get idClient
     *
     * @return integer 
     */
     public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set cin
     *
     * @param integer $cin
     * @return Ibrahim
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return integer 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Ibrahim
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
     * @return Ibrahim
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
     * Set adresse
     *
     * @param string $adresse
     * @return Ibrahim
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    
    
  

}
