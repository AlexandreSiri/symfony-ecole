<?php

namespace ContainerEcqohCx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XQG_MthService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xQG.Mth' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xQG.Mth'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'post' => ['privates', '.errored..service_locator.xQG.Mth.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.xQG.Mth": it references class "App\\Entity\\Post" but no such service exists.'],
        ], [
            'doctrine' => '?',
            'post' => 'App\\Entity\\Post',
        ]);
    }
}