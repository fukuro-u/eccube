<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yh_I39Service extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Yh._I39' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Yh._I39'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'shipping' => ['privates', '.errored..service_locator.Yh._I39.Eccube\\Entity\\Shipping', NULL, 'Cannot autowire service ".service_locator.Yh._I39": it needs an instance of "Eccube\\Entity\\Shipping" but this type has been excluded in "eccube/services.yaml".'],
        ], [
            'shipping' => 'Eccube\\Entity\\Shipping',
        ]);
    }
}
