<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/movies/{name}", name="movieDetails", defaults={"name"=null}, methods={"GET"})
     */
    public function movieDetails(): Response
    {
        // findAll() SELECT * FROM movies;
        // find() SELECT * FROM movies where id=5
        // findBy() SELECT * FROM movies ORDER BY id DESC
        // findByOne() SELECT * FROM movies WHERE id = 6 
            // AND title = 'the dark knoght' ORDER By id DESC
        // count() SELECT COOUNT() from movies WHERE id = 1
        // $movies = $repository->count(['id'=>5]);
        // $movies = $repository->findOneBy(['id' => 6], ['id'=> DESC]);


        $repository = $this->em->getRepository(Movie::class);
        $movies = $repository->findall();
        // dd($movies);

        return $this->render('movies/index.html.twig', [
            'controller_name' => 'MoviesController',
            'movies' => $movies,
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
