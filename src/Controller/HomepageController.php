<?php

namespace App\Controller;

use App\Services\GenreServiceInterface;
use App\Services\MovieServiceInterface;
use App\Services\VideoServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="homepage")
 */
class HomepageController extends AbstractController
{
    public function __invoke(
        GenreServiceInterface $genreService,
        MovieServiceInterface $movieService,
        VideoServiceInterface $videoService
    ): Response {
        $genreList = $genreService->getGenreList();
        $popularMovies = $movieService->getPopularMovies();
        $featuredMovie = $popularMovies->first();
        $mainVideo = $videoService->getVideoList($featuredMovie->getId())->first();

        return $this->render('homepage.html.twig', [
            'movies' => $popularMovies,
            'genre_list' => $genreList,
            'featured_movie' => $featuredMovie,
            'main_video' => $mainVideo
        ]);
    }
}
