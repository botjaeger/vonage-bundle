<?php

namespace Botjaeger\VonageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Botjaeger\VonageBundle\DependencyInjection\BotjaegerVonageExtension;

class BotjaegerVonageBundle extends Bundle
{
    public function getContainerExtension(): BotjaegerVonageExtension
    {
        return new BotjaegerVonageExtension();
    }
}
