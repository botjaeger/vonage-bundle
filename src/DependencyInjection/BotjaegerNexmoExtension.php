<?php

namespace Botjaeger\NexmoBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Class NexmoExtension
 * @package Botjaeger\NexmoBundle\DependencyInjection
 */
class BotjaegerNexmoExtension extends Extension
{
    /**
     * Loads a specific configuration.
     *
     * @param array $configs
     * @param ContainerBuilder $container
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('botjaeger_nexmo.api_key', $config['api_key']);
        $container->setParameter('botjaeger_nexmo.api_secret', $config['api_secret']);
        $container->setParameter('botjaeger_nexmo.api_brand', $config['api_brand']);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
    }
}
