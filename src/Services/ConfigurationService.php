<?php

namespace App\Services;

use App\Entity\Configuration;
use App\Services\Cache\CacheOptions;

final class ConfigurationService extends AbstractApiService implements ConfigurationServiceInterface
{
    public function getImageHost(): string
    {
        // 86400 = 24h
        $cacheOptions = new CacheOptions('configuration', 86400);
        $data = $this->cacheHandler->fetch($cacheOptions);

        if (null != $data) {
            /** @var Configuration $configuration */
            $configuration = $this->serializer->deserialize($data, Configuration::class, 'json');

            return $configuration->getSecureBaseUrl();
        }

        $data = $this->apiClient->get('configuration');

        $this->cacheHandler->persist($cacheOptions, $data);

        /** @var Configuration $configuration */
        $configuration = $this->serializer->deserialize($data, Configuration::class, 'json');

        return $configuration->getSecureBaseUrl();
    }
}
