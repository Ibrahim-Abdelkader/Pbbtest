<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace IA\IbrahimAbdelkaderBundle\Entity;

/**
 * Description of IAAgence
 *
 * @author Lenovo-
 */

use Doctrine\ORM\Mapping as ORM ;
/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class IAAgence {
    //put your code here
    /**
     * @ORM\Column(name="idAgence",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idAgence ;
    /**
     *
     * @ORM\Column(name="adresse",type="string",length=200)
     * 
     */
    private $adresse;
    
    function getIdAgence() {
        return $this->idAgence;
    }

    function getAdresse() {
        return $this->adresse;
    }

  

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }


    
}
