<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YDhGxO1Service extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.yDhGxO1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yDhGxO1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'TaxRule' => ['privates', '.errored..service_locator.yDhGxO1.Eccube\\Entity\\TaxRule', NULL, 'Cannot autowire service ".service_locator.yDhGxO1": it needs an instance of "Eccube\\Entity\\TaxRule" but this type has been excluded in "eccube/services.yaml".'],
        ], [
            'TaxRule' => 'Eccube\\Entity\\TaxRule',
        ]);
    }
}
