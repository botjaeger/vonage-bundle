<?php

namespace Botjaeger\NexmoBundle\DependencyInjection;

use Nexmo\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BotjaegerNexmoExtensionTest extends WebTestCase
{
    public function testServiceRegistration()
    {
        self::bootKernel();
        $this->assertInstanceOf(Client::class, self::$container->get('default_nexmo.client'));
    }

    public function testBotjaegerClient()
    {
        self::bootKernel();
        $this->assertInstanceOf(\Botjaeger\NexmoBundle\NexmoClient\Client::class, self::$container->get('botjaeger_nexmo.nexmo_client.client'));
    }
}
