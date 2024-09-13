<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Lock_Default_Store_2BORioJService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.lock.default.store.2BORioJ' shared service.
     *
     * @return \Symfony\Component\Lock\PersistingStoreInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/PersistingStoreInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/Store/StoreFactory.php';

        return $container->privates['.lock.default.store.2BORioJ'] = \Symfony\Component\Lock\Store\StoreFactory::createStore('semaphore');
    }
}
