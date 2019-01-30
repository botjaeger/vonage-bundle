<?php

namespace Botjaeger\NexmoBundle\Tests\DependencyInjection;

use Nexmo\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BotjaegerNexmoExtensionTest extends WebTestCase
{
    public static function setUpBeforeClass()
    {
        self::bootKernel();
    }

    public function testServiceRegistration()
    {
        $this->assertInstanceOf(Client::class, self::$container->get('botjaeger_nexmo.client'));
    }
}
