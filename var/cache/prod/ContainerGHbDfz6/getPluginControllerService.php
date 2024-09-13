<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginControllerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Store\PluginController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Store\PluginController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/PluginController.php';

        $container->services['Eccube\\Controller\\Admin\\Store\\PluginController'] = $instance = new \Eccube\Controller\Admin\Store\PluginController(($container->services['Eccube\\Repository\\PluginRepository'] ?? $container->load('getPluginRepositoryService')), ($container->services['Eccube\\Service\\PluginService'] ?? $container->load('getPluginServiceService')), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? self::getBaseInfoRepositoryService($container)), ($container->privates['Eccube\\Service\\PluginApiService'] ?? $container->load('getPluginApiServiceService')), ($container->privates['Eccube\\Service\\Composer\\ComposerServiceInterface'] ?? $container->load('getComposerServiceInterfaceService')), ($container->services['Eccube\\Service\\SystemService'] ?? self::getSystemServiceService($container)));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        $instance->setSession(($container->privates['Eccube\\Session\\Session'] ?? self::getSessionService($container)));
        $instance->setFormFactory(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
        $instance->setRouter(($container->services['router'] ?? self::getRouterService($container)));
        $instance->setContainer(($container->privates['.service_locator.boskKaG'] ?? $container->load('get_ServiceLocator_BoskKaGService'))->withContext('Eccube\\Controller\\Admin\\Store\\PluginController', $container));

        return $instance;
    }
}
