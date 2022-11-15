<?php

namespace App\Entity;

class VideoList implements \IteratorAggregate
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var array<Video>
     */
    private $results = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return VideoList
     */
    public function setId(int $id): VideoList
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Video[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param Video[] $results
     * @return VideoList
     */
    public function setResults(array $results): VideoList
    {
        $this->results = $results;
        return $this;
    }

    public function first(): ?Video
    {
        $first = reset($this->results);

        return $first !== false ? $first : null;
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->results);
    }
}
