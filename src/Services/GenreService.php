<?php

namespace App\Services;

use App\Entity\GenreList;
use App\Services\Cache\CacheOptions;

final class GenreService extends AbstractApiService implements GenreServiceInterface
{
    public function getGenreList(): GenreList
    {
        // 43200 = 12h
        $cacheOptions = new CacheOptions('genres', 43200);
        $data = $this->cacheHandler->fetch($cacheOptions);

        if ($data) {
            return $this->serializer->deserialize($data, GenreList::class, 'json');
        }

        $data = $this->apiClient->get('genre/movie/list');
        $this->cacheHandler->persist($cacheOptions, $data);

        return $this->serializer->deserialize($data, GenreList::class, 'json');
    }
}
