<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShoppingControllerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Controller\ShoppingController' shared autowired service.
     *
     * @return \Eccube\Controller\ShoppingController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractShoppingController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/ShoppingController.php';

        $container->services['Eccube\\Controller\\ShoppingController'] = $instance = new \Eccube\Controller\ShoppingController(($container->privates['Eccube\\Service\\CartService'] ?? self::getCartServiceService($container)), ($container->privates['Eccube\\Service\\MailService'] ?? $container->load('getMailServiceService')), ($container->privates['Eccube\\Repository\\OrderRepository'] ?? self::getOrderRepositoryService($container)), ($container->privates['Eccube\\Service\\OrderHelper'] ?? $container->load('getOrderHelperService')), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Eccube\\Service\\Payment\\Method\\Cash' => ['services', 'Eccube\\Service\\Payment\\Method\\Cash', 'getCashService', true],
        ], [
            'Eccube\\Service\\Payment\\Method\\Cash' => 'Eccube\\Service\\Payment\\Method\\Cash',
        ]), ($container->privates['Eccube\\Repository\\TradeLawRepository'] ?? $container->load('getTradeLawRepositoryService')), ($container->privates['limiter.shopping_confirm_ip'] ?? $container->load('getLimiter_ShoppingConfirmIpService')), ($container->privates['limiter.shopping_confirm_customer'] ?? $container->load('getLimiter_ShoppingConfirmCustomerService')), ($container->privates['limiter.shopping_checkout_ip'] ?? $container->load('getLimiter_ShoppingCheckoutIpService')), ($container->privates['limiter.shopping_checkout_customer'] ?? $container->load('getLimiter_ShoppingCheckoutCustomerService')), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? self::getBaseInfoRepositoryService($container)));

        $instance->setPurchaseFlow(($container->privates['eccube.purchase.flow.shopping'] ?? $container->load('getEccube_Purchase_Flow_ShoppingService')));
        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        $instance->setSession(($container->privates['Eccube\\Session\\Session'] ?? self::getSessionService($container)));
        $instance->setFormFactory(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
        $instance->setRouter(($container->services['router'] ?? self::getRouterService($container)));
        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'form.factory' => ['privates', 'form.factory', 'getForm_FactoryService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
            'twig' => ['privates', 'twig', 'getTwigService', false],
        ], [
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'twig' => '?',
        ]))->withContext('Eccube\\Controller\\ShoppingController', $container));

        return $instance;
    }
}
