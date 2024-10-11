<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Utility\PythagoreUtility ;

class PythagoreController extends AbstractController
{   
     private $pythagoreUtility;

    #[Route('/pythagore', name: 'app_pythagore')]
    public function index(): Response
    {
        return $this->render('pythagore/index.html.twig', [
            'controller_name' => 'PythagoreController',
        ]);
    }


    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->PythagoreUtility = $pythagoreUtility;
    }

    #[Route('/pythagore/view', name :'display_pythagore')]
    public function DisplayPythagoreAction(): Response
    {
        $pythagoreTable = $this->PythagoreUtility->display();
        return $this->render('displayPythagore.html.twig', [
            'pythagoreTable' => $pythagoreTable,
        ]);
    }

    
}
