<?php


namespace App\Services;


use App\Entity\VideoList;

interface VideoServiceInterface
{
    public function getVideoList(string $movieId): VideoList;
}
