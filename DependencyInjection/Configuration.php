<?php

namespace Kamwoz\WubookAPIBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {

    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('wubook_api');

        $rootNode
                ->children()
                ->scalarNode('room_model')->defaultValue('Kamwoz\WubookAPIBundle\Model\Room')->cannotBeEmpty()->end()
                ->scalarNode('reservation_model')->defaultValue('Kamwoz\WubookAPIBundle\Model\Reservation')->cannotBeEmpty()->end()
                ->scalarNode('url')->defaultValue('https://wubook.net/xrws/')->end()
                ->end()
        ;

        return $treeBuilder;
    }

}
