<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShippingMultipleControllerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Controller\ShippingMultipleController' shared autowired service.
     *
     * @return \Eccube\Controller\ShippingMultipleController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractShoppingController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/ShippingMultipleController.php';

        $container->services['Eccube\\Controller\\ShippingMultipleController'] = $instance = new \Eccube\Controller\ShippingMultipleController(($container->privates['Eccube\\Repository\\Master\\PrefRepository'] ?? $container->load('getPrefRepositoryService')), ($container->privates['Eccube\\Repository\\OrderRepository'] ?? self::getOrderRepositoryService($container)), ($container->privates['Eccube\\Repository\\Master\\OrderItemTypeRepository'] ?? $container->load('getOrderItemTypeRepositoryService')), ($container->privates['Eccube\\Service\\OrderHelper'] ?? $container->load('getOrderHelperService')), ($container->privates['Eccube\\Service\\CartService'] ?? self::getCartServiceService($container)), ($container->privates['eccube.purchase.flow.cart'] ?? $container->load('getEccube_Purchase_Flow_CartService')), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? self::getBaseInfoRepositoryService($container)), ($container->privates['Eccube\\Service\\MailService'] ?? $container->load('getMailServiceService')));

        $instance->setPurchaseFlow(($container->privates['eccube.purchase.flow.shopping'] ?? $container->load('getEccube_Purchase_Flow_ShoppingService')));
        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        $instance->setSession(($container->privates['Eccube\\Session\\Session'] ?? self::getSessionService($container)));
        $instance->setFormFactory(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
        $instance->setRouter(($container->services['router'] ?? self::getRouterService($container)));
        $instance->setContainer(($container->privates['.service_locator.boskKaG'] ?? $container->load('get_ServiceLocator_BoskKaGService'))->withContext('Eccube\\Controller\\ShippingMultipleController', $container));

        return $instance;
    }
}
