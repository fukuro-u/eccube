<?php

namespace ContainerGHbDfz6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailTemplateRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\MailTemplateRepository' shared autowired service.
     *
     * @return \Eccube\Repository\MailTemplateRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/MailTemplateRepository.php';

        return $container->privates['Eccube\\Repository\\MailTemplateRepository'] = new \Eccube\Repository\MailTemplateRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
