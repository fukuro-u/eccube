<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEccube_Security_Logout_SuccessHandlerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'eccube.security.logout.success_handler' shared autowired service.
     *
     * @return \Eccube\Security\Http\Authentication\EccubeLogoutSuccessHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Security/Http/Authentication/EccubeLogoutSuccessHandler.php';

        return $container->privates['eccube.security.logout.success_handler'] = new \Eccube\Security\Http\Authentication\EccubeLogoutSuccessHandler(($container->privates['Eccube\\Request\\Context'] ?? self::getContextService($container)));
    }
}
