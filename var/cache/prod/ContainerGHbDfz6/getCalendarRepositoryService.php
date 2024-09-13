<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendarRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\CalendarRepository' shared autowired service.
     *
     * @return \Eccube\Repository\CalendarRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/CalendarRepository.php';

        return $container->privates['Eccube\\Repository\\CalendarRepository'] = new \Eccube\Repository\CalendarRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
