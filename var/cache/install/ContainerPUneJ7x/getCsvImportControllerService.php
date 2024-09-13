<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsvImportControllerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Order\CsvImportController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Order\CsvImportController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/AbstractCsvImportController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/CsvImportController.php';

        $container->services['Eccube\\Controller\\Admin\\Order\\CsvImportController'] = $instance = new \Eccube\Controller\Admin\Order\CsvImportController(($container->privates['Eccube\\Repository\\ShippingRepository'] ?? $container->load('getShippingRepositoryService')), ($container->privates['Eccube\\Service\\OrderStateMachine'] ?? $container->load('getOrderStateMachineService')));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        $instance->setSession(($container->privates['Eccube\\Session\\Session'] ?? self::getSessionService($container)));
        $instance->setFormFactory(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
        $instance->setRouter(($container->services['router'] ?? self::getRouterService($container)));
        $instance->setContainer(($container->privates['.service_locator.boskKaG'] ?? $container->load('get_ServiceLocator_BoskKaGService'))->withContext('Eccube\\Controller\\Admin\\Order\\CsvImportController', $container));

        return $instance;
    }
}
