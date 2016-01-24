<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace IA\IbrahimAbdelkaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \IA\IbrahimAbdelkaderBundle\Entity ;
use IA\IbrahimAbdelkaderBundle\Form ;
class IbrahimAbdelkaderController extends Controller
{
    public function IAAjoutAction()
    {
        $request=$this->get('request');
         //var_dump($request);
        // return new \Symfony\Component\HttpFoundation\Response($request);
        $nom=$request->get('nom');
        $prenom=$request->get('prenom');
        $cin=$request->get('cin');
        $adresse=$request->get('adresse');
        if($nom!="" && $prenom!="" && $cin!=0 && $adresse!=""){
        $ibrahim = new Entity\Ibrahim() ;
        $ibrahim->setNom($nom) ;
        $ibrahim->setPrenom($prenom);
        $ibrahim->setCin($cin);
        $ibrahim->setAdresse($adresse);
        $IA=$this->getDoctrine()->getManager();
        $IA->persist($ibrahim);
        $IA->flush();
        return$this->redirect($this->generateUrl('IA_affichage'));
        }
        
        return $this->render('IAIbrahimAbdelkaderBundle:Ibrahim:IAajout.html.twig');
    }
    public function IAAjoutCommandeAction()
    {   $commande= new Entity\Abdelkader();
        $form = $this->createFormBuilder($commande) ->add('type')->add('idClient')->add('devis')->add('dateLivraison')
                ->add('type','choice',array('choices'=>array('bureautique'=>'bureautique','informatique'=>'informatique')))
                ->add('ajouter','submit')->getForm();
        $request=$this->get('request');
        if($form->handleRequest($request)->isValid())
        {
            
            $IA=$this->getDoctrine()->getManager();
            $IA->persist($commande);
            $IA->flush();
            return $this->redirect($this->generateUrl('IA_affichage'));
            
        }
        return $this->render('IAIbrahimAbdelkaderBundle:Ibrahim:IAajoutCommande.html.twig',array('form'=>$form->createView()));
    }
     public function IAAjoutClientAction()
    {   
    $ibrahim = new Entity\Ibrahim ();
    $form = $this->createForm(new Form\IbrahimForm(),$ibrahim);
    $request=$this->get('request');
    //if($request->get('method')=='post')
     if($request->isMethod('POST'))
    {
        
        $form->bind($request);
        
        if($form->isValid()){
            $IA=$this->getDoctrine()->getManager();
            $IA->persist($ibrahim);
            $IA->flush();
            return $this->redirect($this->generateUrl('IA_affichage'));
            
        }
        
        
    }
        return $this->render('IAIbrahimAbdelkaderBundle:Ibrahim:IAajoutClient.html.twig',array('form'=>$form->createView()));
    }
     public function IASuppressionClientAction($IdClient)
    {    $IA=$this->getDoctrine()->getManager();
         $Ibrahim=$IA->getRepository('IAIbrahimAbdelkaderBundle:Ibrahim')->findOneByIdClient($IdClient);
         $IA->remove($Ibrahim);
         $IA->flush();
         return $this->redirect($this->generateUrl('IA_affichage'));
        
         //return $this->render('IAIbrahimAbdelkaderBundle:Ibrahim:IAsuppressionClient.html.twig', array('id' => $IdClient));
    }
     public function IASuppressionCommandeAction($Id_commande)
    {
         $IA=$this->getDoctrine()->getManager();
         $Abdelkader=$IA->getRepository('IAIbrahimAbdelkaderBundle:Abdelkader')->findOneByIdCommande($Id_commande);
         $IA->remove($Abdelkader);
         $IA->flush();
         return$this->redirect($this->generateUrl('IA_affichage'));
         //return $this->render('IAIbrahimAbdelkaderBundle:Ibrahim:IAsuppressionCommande.html.twig', array('id' => $Id_commande));
    }
     public function IASuppressionAction()
    {
        return $this->render('IAIbrahimAbdelkaderBundle:Ibrahim:IAsuppressionClient.html.twig');
    }
     public function IAModificationClientAction($IdClient)
    {
     $IA=$this->getDoctrine()->getManager();
     $Ibrahim=$IA->getRepository('IAIbrahimAbdelkaderBundle:Ibrahim')->findOneByIdClient($IdClient);
           
   
    $form = $this->createForm(new Form\IbrahimForm(),$Ibrahim);
    $request=$this->get('request');
    //if($request->get('method')=='post')
     if($request->isMethod('POST'))
    {
        
        $form->bind($request);
        
        if($form->isValid()){
            $IA=$this->getDoctrine()->getManager();
            $IA->persist($Ibrahim);
            $IA->flush();
            return $this->redirectToRoute('IA_affichage');
            
        }
         
         
       
    }
    return $this->render('IAIbrahimAbdelkaderBundle:Ibrahim:IAajoutCommande.html.twig',array('form'=>$form->createView(),'ibrahim'=>$Ibrahim));
    
    }
     public function IAAffichageAction()
    {
         $IA=$this->getDoctrine()->getManager();
         $Ibrahim=$IA->getRepository('IAIbrahimAbdelkaderBundle:Ibrahim')->findAll();
         $Abdelkader=$IA->getRepository('IAIbrahimAbdelkaderBundle:Abdelkader')->findAll();
         //var_dump($Etudiant);
         return $this->render('IAIbrahimAbdelkaderBundle:Ibrahim:IAaffichage.html.twig',array('ibrahim'=>$Ibrahim ,'abdelkader'=>$Abdelkader ));
         
        
    }
     public function IARechercheClientAction()
    {   
    $IA=$this->getDoctrine()->getManager();
    $request=$this->get('request');
    //if($request->get('method')=='post')
     $Ibrahim=$IA->getRepository('IAIbrahimAbdelkaderBundle:Ibrahim')->findAll();
     if($request->isMethod('POST'))
    {
        //var_dump($request);
        $champ=$request->get('chrecherche');
        $Ibrahim=$IA->getRepository('IAIbrahimAbdelkaderBundle:Ibrahim')->chercherEtudiant($champ);//findByNom($champ);
            
            
    }
        
         return $this->render(('IAIbrahimAbdelkaderBundle:Ibrahim:IAsuppression.html.twig'),array('ibrahim'=>$Ibrahim));
        
    }
     public function IAAffichageQueryBuilderAction()
    {
         $IA=$this->getDoctrine()->getManager();
         $Ibrahim=$this->getDoctrine()->getRepository('IAIbrahimAbdelkaderBundle:Ibrahim');
         $req=$Ibrahim->createQueryBuilder('e')
                 ->select('e.idClient','e.nom','e.cin')
                 ->getQuery();
         $ibrahim=$req->getResult();
         $Abdelkader=$IA->getRepository('IAIbrahimAbdelkaderBundle:Abdelkader')->findAll();
         //var_dump($Etudiant);
         return $this->render('IAIbrahimAbdelkaderBundle:Ibrahim:IAafichageQB.html.twig',array('ibrahim'=>$ibrahim ,'abdelkader'=>$Abdelkader ));
         
        
    }
     public function IAAffichageDQLAction()
    {
         $IA=$this->getDoctrine()->getManager();
         $Ibrahim=$IA->getRepository('IAIbrahimAbdelkaderBundle:Ibrahim')->afficherEtudiant();
         $Abdelkader=$IA->getRepository('IAIbrahimAbdelkaderBundle:Abdelkader')->findAll();
         //var_dump($Etudiant);
         
         return $this->render('IAIbrahimAbdelkaderBundle:Ibrahim:IAaffichageDQL.html.twig',array('ibrahim'=>$Ibrahim ,'abdelkader'=>$Abdelkader ));
         
        
    }
       
}


    