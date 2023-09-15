<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{

    /**
     * @Route("/movies/{name}", name="movieDetails", defaults={"name"=null}, methods={"GET"})
     */
    public function movieDetails($name): Response
    {
        return $this->render('movies/index.html.twig', [
            'controller_name' => 'MoviesController',
            'name' => $name,
        ]);
    }


    // // #[Route('/movis', name:'movies')] new version
    // /**
    //  * @Route("/movies/{name}", name="movieDetails", defaults={"name"=null}, methods={"GET"})
    //  */
    // public function movieDetails($name): JsonResponse
    // {
    //     return $this->json([
    //         'message' => 'Movie name is ' . $name,
    //         'path' => 'src/Controller/MoviesController.php',
    //     ]);
    // }

    // /**
    //  * @Route("/movies", name="app_movies")
    //  */
    // public function index(): Response
    // {
    //     return $this->render('movies/index.html.twig', [
    //         'controller_name' => 'MoviesController',
    //     ]);
    // }
}
