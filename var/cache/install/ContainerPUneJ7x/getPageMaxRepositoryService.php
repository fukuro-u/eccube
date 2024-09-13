<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageMaxRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\PageMaxRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\PageMaxRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/PageMaxRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\PageMaxRepository'] = new \Eccube\Repository\Master\PageMaxRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
