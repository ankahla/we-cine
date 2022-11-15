<?php
namespace App\Entity;


class Configuration
{
    /**
     * @var array
     */
    private $images;

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param array $images
     * @return Configuration
     */
    public function setImages(array $images): Configuration
    {
        $this->images = $images;
        return $this;
    }

    public function getSecureBaseUrl(): string
    {
        return $this->images['secure_base_url'] ?? '';
    }
}
