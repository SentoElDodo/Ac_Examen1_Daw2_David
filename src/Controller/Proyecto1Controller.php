<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Proyecto1Controller extends AbstractController
{
    /**
     * @Route("/proyecto", name="index")
     */
    public function index()
    {
        return $this->render('proyecto1/proyecto.html.twig', [
            'controller_name' => 'Proyecto1Controller',
        ]);
    }

    /**
     * @Route("/proyecto/2", name="index2")
     */
    public function index2()
    {
        return $this->render('proyecto2/proyecto2.html.twig', [
            'controller_name' => 'Proyecto2Controller',
        ]);
    }

    /**
     * @Route("/proyecto/3", name="index3")
     */
    public function index3()
    {
        return $this->render('proyecto3/proyecto3.html.twig', [
            'controller_name' => 'Proyecto3Controller',
        ]);
    }

    
}
