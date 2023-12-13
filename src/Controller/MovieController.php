<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Movie;

class MovieController extends AbstractController
{
    #[Route('/movie', name: 'app_movie')]
    public function index(): Response
    {
        return $this->render('movie/index.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }
    #[Route('/movie/{id}', name: 'app_movie_show')]
        public function show($id): Response
        {
            return $this->render('movie/show.html.twig', [
                'controller_name' => 'MovieController',
                'id' => $id,
            ]);
        }
    
}
