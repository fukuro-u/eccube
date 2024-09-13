<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductTagRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\ProductTagRepository' shared autowired service.
     *
     * @return \Eccube\Repository\ProductTagRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/ProductTagRepository.php';

        return $container->privates['Eccube\\Repository\\ProductTagRepository'] = new \Eccube\Repository\ProductTagRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
