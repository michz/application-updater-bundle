<?php

namespace mztx\ApplicationUpdaterBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author   :  Michael Zapf <m.zapf@mztx.de>
 * @date     :  07.01.18
 * @time     :  11:47
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('application_updater');
        $rootNode
            ->children()
                ->enumNode('minimum_stability')
                    ->values(['stable', 'RC', 'beta', 'alpha', 'dev'])
                ->end()
                ->enumNode('release_provider')
                    ->values(['github_releases'])
                ->end()
                ->scalarNode('github_releases_url')
                    ->defaultValue('')
                ->end()
                ->arrayNode('storage')
                    ->children()
                        ->scalarNode('path')->defaultValue('/tmp/application_update.zip')->end()
                        ->booleanNode('clean')->defaultValue(true)->end()
                    ->end() // children of local
                ->end() // local
                ->arrayNode('protected_paths')
                    ->scalarPrototype()->end()
                ->end()
            ->end() // root note
        ;

        return $treeBuilder;
    }
}
