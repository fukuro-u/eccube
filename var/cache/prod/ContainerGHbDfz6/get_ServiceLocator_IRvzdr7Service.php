<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IRvzdr7Service extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.iRvzdr7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iRvzdr7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService', true],
            'fs' => ['privates', 'filesystem', 'getFilesystemService', true],
            'twig' => ['privates', 'twig', 'getTwigService', false],
        ], [
            'cacheUtil' => 'Eccube\\Util\\CacheUtil',
            'fs' => '?',
            'twig' => '?',
        ]);
    }
}
