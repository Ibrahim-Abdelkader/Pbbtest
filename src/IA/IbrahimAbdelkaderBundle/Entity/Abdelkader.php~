<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Abdelkader
 *
 * @author Lenovo-
 */
namespace IA\IbrahimAbdelkaderBundle\Entity;
use Doctrine\ORM\Mapping as ORM ;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class Abdelkader {
    //put your code here
    
    
    /**
     * @ORM\Column(name="idCommande",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCommande ;
    /**
     *
     *@ORM\Column(name="type",type="string",length=200)
     *@Assert\Length(min=5,max=20)
     */
    private $type;
    /**
     *
     * @ORM\Column(name="idClient",type="integer")
     * 
     */
    
    private $idClient ;
    
     /**
     *
     * @ORM\Column(name="devis",type="integer")
     * 
     */
    private $devis;
    /**
     *
     * @ORM\Column(name="dateLivraison",type="string",length=200)
     * 
     */
    private $dateLivraison;
    

    /**
     * Get idCommande
     *
     * @return integer 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Abdelkader
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set idClient
     *
     * @param integer $idClient
     * @return Abdelkader
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

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
     * Set devis
     *
     * @param integer $devis
     * @return Abdelkader
     */
    public function setDevis($devis)
    {
        $this->devis = $devis;

        return $this;
    }

    /**
     * Get devis
     *
     * @return integer 
     */
    public function getDevis()
    {
        return $this->devis;
    }

    /**
     * Set dateLivraison
     *
     * @param string $dateLivraison
     * @return Abdelkader
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return string 
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }
}
