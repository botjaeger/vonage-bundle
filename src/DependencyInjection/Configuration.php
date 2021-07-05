<?php

namespace Botjaeger\VonageBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('botjaeger_vonage');

        if (!method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->root('botjaeger_vonage');
        } else {
            $rootNode = $treeBuilder->getRootNode();
        }

        $rootNode
            ->children()
                ->scalarNode('api_key')
                    ->info('Your Nexmo API key')
                    ->isRequired()
                    ->cannotBeEmpty()
                    ->end()
                ->scalarNode('api_secret')
                    ->info('Your Nexmo API secret')
                    ->isRequired()
                    ->cannotBeEmpty()
                    ->end()
                ->scalarNode('api_brand')
                    ->info('Your Nexmo brand name')
                    ->defaultValue('Botjaeger Vonage')
                    ->end()
            ->end();

        return $treeBuilder;
    }
}
