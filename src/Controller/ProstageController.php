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
     * @Route("/", name="prostage_acceuil")
     */
    public function acceuil()
    {
        return $this->render('prostage/acceuil.html.twig');
    }

     /**
     * @Route("/entreprises", name="prostage_entreprises")
     */
    public function entreprises()
    {
        return $this->render('prostage/entreprises.html.twig');
    }

     /**
     * @Route("/formations", name="prostage_formations")
     */
    public function formations()
    {
        return $this->render('prostage/formations.html.twig');
    }
}
