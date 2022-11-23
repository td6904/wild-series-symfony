<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;


class CategoryController extends AbstractController
{
    #[Route('/category', name: 'category_index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/category/{categoryName}', name: 'category_show')]
public function show(string $categoryName, CategoryRepository $categoryRepository):Response
{
    $categoryName = $categoryRepository->findBy(['name' => 'categories'],
    ['name' => 'DESC']);
    // same as $program = $programRepository->find($id);

    if (!$categoryName) {
        throw $this->createNotFoundException(
            'The '. $categories .' does not exist'
        );
    }
    return $this->render('category/show.html.twig', [
        'category' => $categoryName,
    ]);
}
}
