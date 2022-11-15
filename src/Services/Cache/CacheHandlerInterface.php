<?php

namespace App\Services\Cache;

interface CacheHandlerInterface
{
    public function fetch(?CacheOptions $cacheConfig);
    public function persist(?CacheOptions $cacheConfig, $data): void;
}
