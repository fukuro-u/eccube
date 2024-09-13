<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntryControllerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Controller\EntryController' shared autowired service.
     *
     * @return \Eccube\Controller\EntryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/EntryController.php';

        $container->services['Eccube\\Controller\\EntryController'] = $instance = new \Eccube\Controller\EntryController(($container->privates['Eccube\\Service\\CartService'] ?? self::getCartServiceService($container)), ($container->privates['Eccube\\Repository\\Master\\CustomerStatusRepository'] ?? $container->load('getCustomerStatusRepositoryService')), ($container->privates['Eccube\\Service\\MailService'] ?? $container->load('getMailServiceService')), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? self::getBaseInfoRepositoryService($container)), ($container->privates['Eccube\\Repository\\CustomerRepository'] ?? $container->load('getCustomerRepositoryService')), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), ($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container)), ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['Eccube\\Repository\\PageRepository'] ?? $container->load('getPageRepositoryService')));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        $instance->setSession(($container->privates['Eccube\\Session\\Session'] ?? self::getSessionService($container)));
        $instance->setFormFactory(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
        $instance->setRouter(($container->services['router'] ?? self::getRouterService($container)));
        $instance->setContainer(($container->privates['.service_locator.boskKaG'] ?? $container->load('get_ServiceLocator_BoskKaGService'))->withContext('Eccube\\Controller\\EntryController', $container));

        return $instance;
    }
}
