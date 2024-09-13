<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductCategoryRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\ProductCategoryRepository' shared autowired service.
     *
     * @return \Eccube\Repository\ProductCategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/ProductCategoryRepository.php';

        return $container->privates['Eccube\\Repository\\ProductCategoryRepository'] = new \Eccube\Repository\ProductCategoryRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
