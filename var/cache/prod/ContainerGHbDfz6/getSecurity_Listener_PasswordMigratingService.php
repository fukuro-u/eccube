<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_PasswordMigratingService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.password_migrating' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\PasswordMigratingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/PasswordMigratingListener.php';

        return $container->privates['security.listener.password_migrating'] = new \Symfony\Component\Security\Http\EventListener\PasswordMigratingListener(($container->privates['security.password_hasher_factory'] ?? self::getSecurity_PasswordHasherFactoryService($container)));
    }
}
