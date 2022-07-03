<?php

namespace ContainerMhx7bJs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MCtSnILService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MCtSnIL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MCtSnIL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contact' => ['privates', '.errored..service_locator.MCtSnIL.App\\Entity\\Contact', NULL, 'Cannot autowire service ".service_locator.MCtSnIL": it references class "App\\Entity\\Contact" but no such service exists.'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'contact' => 'App\\Entity\\Contact',
            'doctrine' => '?',
        ]);
    }
}
