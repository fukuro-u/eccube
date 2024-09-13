<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductController2Service extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Controller\ProductController' shared autowired service.
     *
     * @return \Eccube\Controller\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/ProductController.php';

        $container->services['Eccube\\Controller\\ProductController'] = $instance = new \Eccube\Controller\ProductController(($container->privates['eccube.purchase.flow.cart'] ?? $container->load('getEccube_Purchase_Flow_CartService')), ($container->privates['Eccube\\Repository\\CustomerFavoriteProductRepository'] ?? $container->load('getCustomerFavoriteProductRepositoryService')), ($container->privates['Eccube\\Service\\CartService'] ?? self::getCartServiceService($container)), ($container->privates['Eccube\\Repository\\ProductRepository'] ?? self::getProductRepositoryService($container)), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? self::getBaseInfoRepositoryService($container)), ($container->privates['security.authentication_utils'] ?? $container->load('getSecurity_AuthenticationUtilsService')), ($container->privates['Eccube\\Repository\\Master\\ProductListMaxRepository'] ?? $container->load('getProductListMaxRepositoryService')));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        $instance->setSession(($container->privates['Eccube\\Session\\Session'] ?? self::getSessionService($container)));
        $instance->setFormFactory(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
        $instance->setRouter(($container->services['router'] ?? self::getRouterService($container)));
        $instance->setContainer(($container->privates['.service_locator.boskKaG'] ?? $container->load('get_ServiceLocator_BoskKaGService'))->withContext('Eccube\\Controller\\ProductController', $container));

        return $instance;
    }
}
