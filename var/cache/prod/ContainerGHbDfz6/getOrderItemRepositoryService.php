<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderItemRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\OrderItemRepository' shared autowired service.
     *
     * @return \Eccube\Repository\OrderItemRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/OrderItemRepository.php';

        return $container->privates['Eccube\\Repository\\OrderItemRepository'] = new \Eccube\Repository\OrderItemRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
