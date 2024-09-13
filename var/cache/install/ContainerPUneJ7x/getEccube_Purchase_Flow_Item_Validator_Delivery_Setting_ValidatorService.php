<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEccube_Purchase_Flow_Item_Validator_Delivery_Setting_ValidatorService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'eccube.purchase.flow.item.validator.delivery.setting.validator' shared service.
     *
     * @return \Eccube\Service\PurchaseFlow\Processor\DeliverySettingValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ValidatorTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/DeliverySettingValidator.php';

        return $container->privates['eccube.purchase.flow.item.validator.delivery.setting.validator'] = new \Eccube\Service\PurchaseFlow\Processor\DeliverySettingValidator(($container->privates['Eccube\\Repository\\DeliveryRepository'] ?? $container->load('getDeliveryRepositoryService')));
    }
}
