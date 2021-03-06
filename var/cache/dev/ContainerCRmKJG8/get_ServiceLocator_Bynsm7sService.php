<?php

namespace ContainerCRmKJG8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bynsm7sService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Bynsm7s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Bynsm7s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\DishRepository', 'getDishRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\DishRepository',
        ]);
    }
}
