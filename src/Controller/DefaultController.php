<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response //<< Object Response HTTP - Le travail d'un 
    //contrôleur de Symfony est de retourner un objet de la classe Response !
    {
        return $this->render('index.html.twig', [
            'message' => 'Bienvenue!',
         ]);
    }
}

//Une route, finalement, ce n'est que de la configuration
//Annotations replaced by attributes - #[attributeName(key: value)]
