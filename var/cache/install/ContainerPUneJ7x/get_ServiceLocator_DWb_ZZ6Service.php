<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DWb_ZZ6Service extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.DWb.ZZ6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DWb.ZZ6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Layout' => ['privates', '.errored..service_locator.DWb.ZZ6.Eccube\\Entity\\Layout', NULL, 'Cannot autowire service ".service_locator.DWb.ZZ6": it needs an instance of "Eccube\\Entity\\Layout" but this type has been excluded in "eccube/services.yaml".'],
            'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService', true],
        ], [
            'Layout' => 'Eccube\\Entity\\Layout',
            'cacheUtil' => 'Eccube\\Util\\CacheUtil',
        ]);
    }
}
