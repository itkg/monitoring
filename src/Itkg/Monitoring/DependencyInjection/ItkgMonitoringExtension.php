<?php

namespace Itkg\Monitoring\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\FileLocator;

/**
 * Class ItkgMonitoringExtension
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class ItkgMonitoringExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = $this->getConfiguration($configs, $container);

        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../../../../Resources/config')
        );
        $loader->load('test.xml');
    }

}