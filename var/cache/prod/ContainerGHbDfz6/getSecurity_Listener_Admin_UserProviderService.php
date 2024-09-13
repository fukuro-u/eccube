<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_Admin_UserProviderService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.admin.user_provider' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserProviderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/UserProviderListener.php';

        return $container->privates['security.listener.admin.user_provider'] = new \Symfony\Component\Security\Http\EventListener\UserProviderListener(($container->privates['Eccube\\Security\\Core\\User\\MemberProvider'] ?? $container->load('getMemberProviderService')));
    }
}
