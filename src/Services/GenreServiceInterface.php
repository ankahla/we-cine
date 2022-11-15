<?php


namespace App\Services;


use App\Entity\GenreList;

interface GenreServiceInterface
{
    public function getGenreList(): GenreList;
}
