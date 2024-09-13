<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEccubeLogoutSuccessHandlerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Security\Http\Authentication\EccubeLogoutSuccessHandler' shared autowired service.
     *
     * @return \Eccube\Security\Http\Authentication\EccubeLogoutSuccessHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Security/Http/Authentication/EccubeLogoutSuccessHandler.php';

        return $container->privates['Eccube\\Security\\Http\\Authentication\\EccubeLogoutSuccessHandler'] = new \Eccube\Security\Http\Authentication\EccubeLogoutSuccessHandler(($container->privates['Eccube\\Request\\Context'] ?? $container->load('getContextService')));
    }
}
