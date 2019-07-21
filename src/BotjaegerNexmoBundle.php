<?php

namespace Botjaeger\NexmoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Botjaeger\NexmoBundle\DependencyInjection\BotjaegerNexmoExtension;

class BotjaegerNexmoBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new BotjaegerNexmoExtension();
    }
}
