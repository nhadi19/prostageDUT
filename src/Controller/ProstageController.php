<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProstageController extends AbstractController
{
    /**
     * @Route("/controleur", name="prostage")
     */
    public function index()
    {
        return $this->render('prostage/index.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }

    
    /**
     * @Route("/acceuil", name="prostage_acceuil")
     */
    public function acceuil()
    {
        return $this->render('prostage/acceuil.html.twig');
    }

}
