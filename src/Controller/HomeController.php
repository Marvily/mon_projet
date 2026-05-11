<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
  /*   #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    } */


 #[Route('/', name: 'home')]
    public function index(): Response
    {
        $recipes = [
            [
                'title' => 'Pâtes Carbonara',
                'image' => 'https://source.unsplash.com/400x300/?pasta',
                'description' => 'Une recette italienne simple et délicieuse.'
            ],
            [
                'title' => 'Poulet rôti',
                'image' => 'https://source.unsplash.com/400x300/?chicken',
                'description' => 'Parfait pour un repas en famille.'
            ],
            [
                'title' => 'Salade fraîche',
                'image' => 'https://source.unsplash.com/400x300/?salad',
                'description' => 'Léger et sain pour l’été.'
            ],
        ];

        return $this->render('home/index.html.twig', [
            'recipes' => $recipes
        ]);
    }


}
