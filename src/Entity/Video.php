<?php


namespace App\Entity;


class Video
{

    private $id;

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $site;

    /**
     * @var int
     */
    private $size;
    /**
     * @var string
     */
    private $type;

    /**
     * @var bool
     */
    private $official;

    /**
     * @var string
     */
    private $publishedAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Video
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Video
     */
    public function setName(string $name): Video
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return Video
     */
    public function setKey(string $key): Video
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getSite(): string
    {
        return $this->site;
    }

    /**
     * @param string $site
     * @return Video
     */
    public function setSite(string $site): Video
    {
        $this->site = $site;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return Video
     */
    public function setSize(int $size): Video
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Video
     */
    public function setType(string $type): Video
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOfficial(): bool
    {
        return $this->official;
    }

    /**
     * @param bool $official
     * @return Video
     */
    public function setOfficial(bool $official): Video
    {
        $this->official = $official;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublishedAt(): string
    {
        return $this->publishedAt;
    }

    /**
     * @param string $publishedAt
     * @return Video
     */
    public function setPublishedAt(string $publishedAt): Video
    {
        $this->publishedAt = $publishedAt;
        return $this;
    }
}
