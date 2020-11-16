<?php

namespace App\Controller;

use App\Entity\Deportiva;
use App\Entity\Categoria;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class MainController extends AbstractController
{
    /**
    *@Route("/", name="main")
    */
     
    public function index(){
        
        return $this->render('about.html.twig', [
            
            'controller_name' => 'MainController.php'
        ]);
        
        /* return $this->render('about/about.html.twig',[
            'titulo' => 'About'
            
        ]); */
    }
    
     // @Route("/{dish<Deportiva|Custom|Naked>?Deportiva}/{currentPage?1}", name="main")
    
    
     //@Route("/{dish?deportiva}/{currentPage?1}", name="main")
     


    /* public function index($dish,$currentPage)
    {
        $categoria=$this->getDoctrine()
                        ->getRepository(categoria::Class)
                        ->findOneBy(['categoria'=>$dish]);


        $deportivas=$this->getDoctrine()
                        ->getRepository(deportiva::Class)
                        ->findBy(['categoria'=>$categoria->getId()]);

        $deportivas=$categoria->getdeportivas();


        return $this->render('about.html.twig', [
            'data' => $deportivas,
            'currentPage' => $currentPage,
            'itemPerPage' => 6
        ]);
    } */
    /*
    private $modelos=[
        'Deportiva' => [
           [ 
            'title' => 'zx6r',
            'descripcion' => 'Moto muy rapida',
            'price' => 'Muy cara'
           ],
           [ 
            'title' => 'cbr600',
            'descripcion' => 'Moto muy rapida',
            'price' => 'Muy cara'
           ],
           [ 
            'title' => 'cbr1000r',
            'descripcion' => 'Moto muy rapida',
            'price' => 'Muy cara'
           ],
           [ 
            'title' => 'r1',
            'descripcion' => 'Moto muy rapida',
            'price' => 'Muy cara'
           ],
           [ 
            'title' => 'hayabusa',
            'descripcion' => 'Moto muy rapida',
            'price' => 'Muy cara'
           ],
           [ 
            'title' => 'h2r',
            'descripcion' => 'Moto muy rapida',
            'price' => 'Muy cara'
           ],

        ],
        'Custom' => [
            [ 
             'title' => 'v-storm',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
            [ 
             'title' => 'gs1250',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
            [ 
             'title' => 'vulcan',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
            [ 
             'title' => 'iron800',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
            [ 
             'title' => 'royal',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
            [ 
             'title' => 'daystar',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
 
        ],
        'Naked' => [
            [ 
             'title' => 'gsr750',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
            [ 
             'title' => 'duke790',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
            [ 
             'title' => 'cb650r',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
            [ 
             'title' => 'mt09',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
            [ 
             'title' => 'mt07',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
            [ 
             'title' => 'xj6',
             'descripcion' => 'Moto muy rapida',
             'price' => 'Muy cara'
            ],
 
         ],
    ];
    */
}


