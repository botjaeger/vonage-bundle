<?php

namespace Botjaeger\VonageBundle\DependencyInjection;

use Nexmo\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BotjaegerVonageExtensionTest extends WebTestCase
{
    public function testServiceRegistration()
    {
        self::bootKernel();
        $this->assertInstanceOf(Client::class, self::$container->get('vonage.client'));
    }
}
