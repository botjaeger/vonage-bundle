<?php

namespace Botjaeger\NexmoBundle;

use Botjaeger\NexmoBundle\DependencyInjection\BotjaegerNexmoExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BotjaegerNexmoBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new BotjaegerNexmoExtension();
    }
}
