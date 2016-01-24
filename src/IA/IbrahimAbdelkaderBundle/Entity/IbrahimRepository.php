<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IbrahimRepository
 *
 * @author Lenovo-
 */
namespace IA\IbrahimAbdelkaderBundle\Entity;
use Doctrine\ORM\EntityRepository ;

class IbrahimRepository extends EntityRepository{
    //put your code here
    
    
    public function afficherEtudiant(){
        
        $request=$this->getEntityManager()->createQuery("select i from IAIbrahimAbdelkaderBundle:Ibrahim i  ");
        return $request->getResult();
        
    }
    public function chercherEtudiant($nom){
        
        $request=$this->getEntityManager()->createQuery("select i from IAIbrahimAbdelkaderBundle:Ibrahim i where i.nom=:nom ")->setParameter('nom',$nom);
        return $request->getResult();
        
    }
    
    
    
}
