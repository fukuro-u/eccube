<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__LyUk7YService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator..lyUk7Y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..lyUk7Y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'extension' => ['privates', 'Eccube\\Twig\\Extension\\EccubeExtension', 'getEccubeExtensionService', false],
        ], [
            'extension' => 'Eccube\\Twig\\Extension\\EccubeExtension',
        ]);
    }
}
