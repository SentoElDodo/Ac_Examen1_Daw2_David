<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaginacionController extends AbstractController
{
    /**
     * @Route("/paginacion", name="paginacion")
     */
    public function index()
    {
        return $this->render('paginacion/paginacion.html.twig', [
            'controller_name' => 'PaginacionController',
        ]);
    }
}
