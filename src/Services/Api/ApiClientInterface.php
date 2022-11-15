<?php
namespace App\Services\Api;

interface ApiClientInterface
{
    /**
     * @return array|object
     */
    public function get(string $uri, array $options = []);
}
