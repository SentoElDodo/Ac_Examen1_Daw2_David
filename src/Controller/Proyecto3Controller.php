<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Proyecto3Controller extends AbstractController
{
    /**
     * @Route("/proyecto3", name="proyecto3")
     */
    public function index()
    {
        return $this->render('proyecto3/proyecto3.html.twig', [
            'controller_name' => 'Proyecto3Controller',
        ]);
    }
}
