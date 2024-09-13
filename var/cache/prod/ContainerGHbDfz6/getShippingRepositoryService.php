<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShippingRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\ShippingRepository' shared autowired service.
     *
     * @return \Eccube\Repository\ShippingRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/ShippingRepository.php';

        return $container->privates['Eccube\\Repository\\ShippingRepository'] = new \Eccube\Repository\ShippingRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
