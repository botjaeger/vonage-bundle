<?php

namespace Botjaeger\NexmoBundle\Tests\DependencyInjection;

use Nexmo\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BotjaegerNexmoExtensionTest extends WebTestCase
{
    public function testServiceRegistration()
    {
        self::bootKernel();
        $this->assertInstanceOf(Client::class, self::$container->get('default_nexmo.client'));
    }
}
