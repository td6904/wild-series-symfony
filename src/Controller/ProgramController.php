<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProgramController extends AbstractController
{
    #[Route('/program/', name: 'program_index')]
    public function index(): Response //<< Object Response HTTP - Le travail d'un 
    //contrôleur de Symfony est de retourner un objet de la classe Response !
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Series',
         ]);
    }

    #[Route('/program/{id}',
        methods: ['GET'],
        name: 'program_show',
        requirements: ['id' => '\d+']
        )]
    public function show(int $id): Response
    {
        return $this->render("program/show.html.twig", [
            'id' => $id,
        ]);
    }


    /*
    #[Route(
        '/categories/category/{id}',
        name: 'category_show'
        )]
    public function show(int $id): Response
    {
        return $this->render("Categories/show.html.twig", [
            'id' => $id
        ]);
    }*/

}

//Une route, finalement, ce n'est que de la configuration
//Annotations replaced by attributes - #[attributeName(key: value)]
