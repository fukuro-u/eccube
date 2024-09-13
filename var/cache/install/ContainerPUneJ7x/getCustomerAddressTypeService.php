<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerAddressTypeService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Front\CustomerAddressType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Front\CustomerAddressType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Front/CustomerAddressType.php';

        return $container->privates['Eccube\\Form\\Type\\Front\\CustomerAddressType'] = new \Eccube\Form\Type\Front\CustomerAddressType(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
    }
}
