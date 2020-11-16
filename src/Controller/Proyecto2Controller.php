<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Proyecto2Controller extends AbstractController
{
    /**
     * @Route("/proyecto2", name="proyecto2")
     */
    public function index()
    {
        return $this->render('proyecto2/proyecto2.html.twig', [
            'controller_name' => 'Proyecto2Controller',
        ]);
    }
}
