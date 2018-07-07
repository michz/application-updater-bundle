<?php

namespace mztx\ApplicationUpdaterBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * @author   :  Michael Zapf <m.zapf@mztx.de>
 * @date     :  07.01.18
 * @time     :  12:01
 */
class ApplicationUpdaterExtension extends ConfigurableExtension
{
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container)
    {
        $container->setParameter('mztx.application_updater.minimum_stability', $mergedConfig['minimum_stability']);
        $container->setParameter('mztx.application_updater.protected_paths', $mergedConfig['protected_paths']);
        $container->setParameter('mztx.application_updater.release_provider', $mergedConfig['release_provider']);
        $container->setParameter('mztx.application_updater.github_release_url', $mergedConfig['github_release_url']);
        $container->setParameter('mztx.application_updater.storage.path', $mergedConfig['storage']['path']);
        $container->setParameter('mztx.application_updater.storage.clean', $mergedConfig['storage']['clean']);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
