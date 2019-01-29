<?php

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
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('botjaeger_nexmo');

        $rootNode->children()
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
            ->scalarNode('brand')
                ->info('Your Nexmo brand name')
                ->defaultValue('botjaeger-nexmo-client-bundle')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
