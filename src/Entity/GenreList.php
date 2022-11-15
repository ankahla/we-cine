<?php

namespace App\Entity;

class GenreList implements \IteratorAggregate
{
    /**
     * @var array<Genre>
     */
    private $genres = [];

    /**
     * @return Movie[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @param Genre[] $genres
     * @return GenreList
     */
    public function setGenres(array $genres): GenreList
    {
        $this->genres = $genres;

        return $this;
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->genres);
    }
}
