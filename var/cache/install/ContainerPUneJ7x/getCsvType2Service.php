<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsvType2Service extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Master\CsvType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Master\CsvType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Master/CsvType.php';

        return $container->privates['Eccube\\Form\\Type\\Master\\CsvType'] = new \Eccube\Form\Type\Master\CsvType();
    }
}
