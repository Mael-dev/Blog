<?php

namespace ContainerCRmKJG8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TC4F5TjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TC4F5Tj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TC4F5Tj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dish' => ['privates', '.errored..service_locator.TC4F5Tj.App\\Entity\\Dish', NULL, 'Cannot autowire service ".service_locator.TC4F5Tj": it references class "App\\Entity\\Dish" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'dish' => 'App\\Entity\\Dish',
            'manager' => '?',
        ]);
    }
}
