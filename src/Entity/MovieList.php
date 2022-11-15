<?php

namespace App\Entity;

class MovieList implements \IteratorAggregate
{
    /**
     * @var int
     */
    private $page;

    /**
     * @var array<Movie>
     */
    private $results;

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return MovieList
     */
    public function setPage(int $page): MovieList
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return Movie[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param Movie[] $results
     * @return MovieList
     */
    public function setResults(array $results): MovieList
    {
        $this->results = $results;
        return $this;
    }

    public function first(): ?Movie
    {
        $first = reset($this->results);

        return $first !== false ? $first : null;
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->results);
    }
}
