<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace IA\IbrahimAbdelkaderBundle\Form ;

/**
 * Description of IbrahimForm
 *
 * @author Lenovo-
 */
class IbrahimForm extends \Symfony\Component\Form\AbstractType {
    function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        $builder->add('cin')
                ->add('nom')
                ->add('prenom')
                ->add('adresse')
                ->add('ajouter','submit');
    }

    public function getName() {
        return 'ibrahim';
    }
}
