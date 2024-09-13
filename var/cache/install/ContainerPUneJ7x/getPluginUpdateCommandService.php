<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginUpdateCommandService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Command\PluginUpdateCommand' shared autowired service.
     *
     * @return \Eccube\Command\PluginUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/PluginCommandTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/PluginUpdateCommand.php';

        $container->privates['Eccube\\Command\\PluginUpdateCommand'] = $instance = new \Eccube\Command\PluginUpdateCommand();

        $instance->setPluginService(($container->services['Eccube\\Service\\PluginService'] ?? $container->load('getPluginServiceService')));
        $instance->setPluginRepository(($container->services['Eccube\\Repository\\PluginRepository'] ?? self::getPluginRepositoryService($container)));
        $instance->setName('eccube:plugin:update');

        return $instance;
    }
}
