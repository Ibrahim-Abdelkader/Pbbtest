<?php

namespace IA\IbrahimAbdelkaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IAIbrahimAbdelkaderBundle:Default:index.html.twig', array('name' => $name));
    }
}
