<?php

namespace App\EventSubscriber;

use App\Services\ConfigurationServiceInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Twig\Environment;

class RequestSubscriber implements EventSubscriberInterface
{
    private Environment $twig;
    private ConfigurationServiceInterface $configurationService;

    public function __construct(Environment $twig, ConfigurationServiceInterface $configurationService)
    {
        $this->twig = $twig;
        $this->configurationService = $configurationService;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [
                ['setTwigGlobals', 10],
            ],
        ];
    }

    public function setTwigGlobals()
    {
        $this->twig->addGlobal('image_host', $this->configurationService->getImageHost());
    }
}
