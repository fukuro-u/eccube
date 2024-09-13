<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMobileDetectService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Detection\MobileDetect' shared autowired service.
     *
     * @return \Detection\MobileDetect
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/mobiledetect/mobiledetectlib/Mobile_Detect.php';
        include_once \dirname(__DIR__, 4).'/vendor/mobiledetect/mobiledetectlib/namespaced/Detection/MobileDetect.php';

        return $container->services['Detection\\MobileDetect'] = new \Detection\MobileDetect();
    }
}
