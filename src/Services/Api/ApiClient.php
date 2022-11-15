<?php

namespace App\Services\Api;

use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiClient implements ApiClientInterface
{
    private HttpClientInterface $client;
    private LoggerInterface $logger;
    private string $apiKey;

    public function __construct(
        HttpClientInterface $httpClientApi,
        LoggerInterface $logger,
        string $apiKey
    ) {
        $this->client = $httpClientApi;
        $this->logger = $logger;
        $this->apiKey = $apiKey;
    }

    public function get(string $uri, array $options = [])
    {
        return $this->request('GET', $uri, $options);
    }

    private function request(string $method, string $uri, array $options = []): string
    {
        $options['query'] = array_merge(
            $options['query'] ?? [],
            ['api_key' => $this->apiKey]
        );

        try {
            $response = $this->client->request($method, $uri, $options);

            if ($response->getStatusCode() >= 400) {
                $this->logger->alert($response->getContent());

                return '';
            }

            return $response->getContent();
        } catch (ClientExceptionInterface | RedirectionExceptionInterface | ServerExceptionInterface $e) {
            $this->logger->alert($e->getResponse()->getContent(false));
        } catch (TransportExceptionInterface $e) {
            $this->logger->alert('Erreur appel api: '.$uri. ' '. $e->getMessage());
        }
    }
}
