<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWorkRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\WorkRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\WorkRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/WorkRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\WorkRepository'] = new \Eccube\Repository\Master\WorkRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
