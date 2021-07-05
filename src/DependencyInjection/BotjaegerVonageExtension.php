<?php

namespace Botjaeger\VonageBundle\DependencyInjection;

use Exception;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class VonageExtension
 * @package Botjaeger\VonageBundle\DependencyInjection
 */
class BotjaegerVonageExtension extends Extension
{
    /**
     * Loads a specific configuration.
     *
     * @param array $configs
     * @param ContainerBuilder $container
     * @throws Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('botjaeger_vonage.api_key', $config['api_key']);
        $container->setParameter('botjaeger_vonage.api_secret', $config['api_secret']);
        $container->setParameter('botjaeger_vonage.api_brand', $config['api_brand']);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
    }
}
