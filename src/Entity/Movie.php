<?php

namespace App\Entity;

class Movie
{
    private $id;

    /**
     * @var string|null
     */
    private $posterPath;

    /**
     * @var bool
     */
    private $adult;

    /**
     * @var string
     */
    private $overview;

    /**
     * @var string
     */
    private $releaseDate;

    /**
     * @var array
     */
    private $genreIds;

    /**
     * @var string
     */
    private $originalTitle;

    /**
     * @var string
     */
    private $originalLanguage;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string|null
     */
    private $backdropPath;

    /**
     * @var float
     */
    private $popularity;

    /**
     * @var int
     */
    private $voteCount;

    /**
     * @var bool
     */
    private $video;

    /**
     * @var int
     */
    private $voteAverage;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Movie
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPosterPath(): ?string
    {
        return $this->posterPath;
    }

    /**
     * @param string|null $posterPath
     * @return Movie
     */
    public function setPosterPath(?string $posterPath): Movie
    {
        $this->posterPath = $posterPath;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAdult(): bool
    {
        return $this->adult;
    }

    /**
     * @param bool $adult
     * @return Movie
     */
    public function setAdult(bool $adult): Movie
    {
        $this->adult = $adult;
        return $this;
    }

    /**
     * @return string
     */
    public function getOverview(): string
    {
        return $this->overview;
    }

    /**
     * @param string $overview
     * @return Movie
     */
    public function setOverview(string $overview): Movie
    {
        $this->overview = $overview;
        return $this;
    }

    /**
     * @return string
     */
    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    /**
     * @param string $releaseDate
     * @return Movie
     */
    public function setReleaseDate(string $releaseDate): Movie
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * @return array
     */
    public function getGenreIds(): array
    {
        return $this->genreIds;
    }

    /**
     * @param array $genreIds
     * @return Movie
     */
    public function setGenreIds(array $genreIds): Movie
    {
        $this->genreIds = $genreIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalTitle(): string
    {
        return $this->originalTitle;
    }

    /**
     * @param string $originalTitle
     * @return Movie
     */
    public function setOriginalTitle(string $originalTitle): Movie
    {
        $this->originalTitle = $originalTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalLanguage(): string
    {
        return $this->originalLanguage;
    }

    /**
     * @param string $originalLanguage
     * @return Movie
     */
    public function setOriginalLanguage(string $originalLanguage): Movie
    {
        $this->originalLanguage = $originalLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Movie
     */
    public function setTitle(string $title): Movie
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBackdropPath(): ?string
    {
        return $this->backdropPath;
    }

    /**
     * @param string|null $backdropPath
     * @return Movie
     */
    public function setBackdropPath(?string $backdropPath): Movie
    {
        $this->backdropPath = $backdropPath;
        return $this;
    }

    /**
     * @return float
     */
    public function getPopularity(): float
    {
        return $this->popularity;
    }

    /**
     * @param float $popularity
     * @return Movie
     */
    public function setPopularity(float $popularity): Movie
    {
        $this->popularity = $popularity;
        return $this;
    }

    /**
     * @return int
     */
    public function getVoteCount(): int
    {
        return $this->voteCount;
    }

    /**
     * @param int $voteCount
     * @return Movie
     */
    public function setVoteCount(int $voteCount): Movie
    {
        $this->voteCount = $voteCount;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVideo(): bool
    {
        return $this->video;
    }

    /**
     * @param bool $video
     * @return Movie
     */
    public function setVideo(bool $video): Movie
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return int
     */
    public function getVoteAverage(): int
    {
        return $this->voteAverage;
    }

    /**
     * @param int $voteAverage
     * @return Movie
     */
    public function setVoteAverage(int $voteAverage): Movie
    {
        $this->voteAverage = $voteAverage;
        return $this;
    }
}
