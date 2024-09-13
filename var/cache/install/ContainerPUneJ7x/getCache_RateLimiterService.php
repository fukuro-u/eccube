<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_RateLimiterService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'cache.rate_limiter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $container->services['cache.rate_limiter'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('m6YYNILR7W', 0, ($container->targetDir.''.'/pools/app'), ($container->privates['cache.default_marshaller'] ??= new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL, false)));

        $instance->setLogger(($container->privates['monolog.logger.cache'] ?? self::getMonolog_Logger_CacheService($container)));

        return $instance;
    }
}
