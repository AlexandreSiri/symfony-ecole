<?php

namespace ContainerMhx7bJs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z0ViHeDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.z0ViHeD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z0ViHeD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comment' => ['privates', '.errored..service_locator.z0ViHeD.App\\Entity\\Comment', NULL, 'Cannot autowire service ".service_locator.z0ViHeD": it references class "App\\Entity\\Comment" but no such service exists.'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'comment' => 'App\\Entity\\Comment',
            'doctrine' => '?',
        ]);
    }
}