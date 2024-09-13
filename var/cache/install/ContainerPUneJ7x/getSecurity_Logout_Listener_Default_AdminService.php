<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_Default_AdminService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'security.logout.listener.default.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\DefaultLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/DefaultLogoutListener.php';

        return $container->privates['security.logout.listener.default.admin'] = new \Symfony\Component\Security\Http\EventListener\DefaultLogoutListener(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), 'admin_login');
    }
}
