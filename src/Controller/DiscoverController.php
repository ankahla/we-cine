<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use App\Services\MovieServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/movie", name="movie_index")
 */
class DiscoverController extends AbstractController
{
    public function __invoke(Request $request, MovieServiceInterface $movieService
    ): Response {
        // genreids comma separated ids
        $genreIds = $request->query->get('genreids', '');

        $filters = [
            'with_genres' => $genreIds
        ];

        $movies = $movieService->getMovieList($filters);

        return $this->render('movie/index.html.twig', [
            'movies' => $movies,
        ]);
    }
}
