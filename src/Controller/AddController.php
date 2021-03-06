<?php

namespace App\Controller;

use App\Entity\deportiva;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    
public function index(EntityManagerInterface $entityManager){

    foreach($this->modelos as $key => $value){
        foreach($value as $dish){
            $deportiva=new deportiva();
            $deportiva->setTipo($key);
            $deportiva->setName($dish['title']);
            $deportiva->setDescripcion($dish['descripcion']);
            $deportiva->setPrice($dish['price']);

            $entityManager->persist($deportiva);
        }
    }
    $entityManager->flush();

}
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
       [ 
        'title' => 'd1',
        'descripcion' => 'Moto muy rapida',
        'price' => 'Muy cara'
       ],
       [ 
        'title' => 'd2',
        'descripcion' => 'Moto muy rapida',
        'price' => 'Muy cara'
       ],
       [ 
        'title' => 'd3',
        'descripcion' => 'Moto muy rapida',
        'price' => 'Muy cara'
       ],
       [ 
        'title' => 'd4',
        'descripcion' => 'Moto muy rapida',
        'price' => 'Muy cara'
       ],
       [ 
        'title' => 'd5',
        'descripcion' => 'Moto muy rapida',
        'price' => 'Muy cara'
       ],
       [ 
        'title' => 'd6',
        'descripcion' => 'Moto muy rapida',
        'price' => 'Muy cara'
       ],
       [ 
        'title' => 'd7',
        'descripcion' => 'Moto muy rapida',
        'price' => 'Muy cara'
       ],
       [ 
        'title' => 'd8',
        'descripcion' => 'Moto muy rapida',
        'price' => 'Muy cara'
       ],
       [ 
        'title' => 'd9',
        'descripcion' => 'Moto muy rapida',
        'price' => 'Muy cara'
       ],
       [ 
        'title' => 'd10',
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
        [ 
            'title' => 'N1',
            'descripcion' => 'Moto muy rapida',
            'price' => 'Muy cara'
        ],
        [ 
            'title' => 'N2',
            'descripcion' => 'Moto muy rapida',
            'price' => 'Muy cara'
        ],
        [ 
            'title' => 'N3',
            'descripcion' => 'Moto muy rapida',
            'price' => 'Muy cara'
        ],

     ],
];


}