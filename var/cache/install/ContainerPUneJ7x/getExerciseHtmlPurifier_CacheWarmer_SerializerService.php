<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExerciseHtmlPurifier_CacheWarmer_SerializerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'exercise_html_purifier.cache_warmer.serializer' shared service.
     *
     * @return \Exercise\HTMLPurifierBundle\CacheWarmer\SerializerCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/exercise/htmlpurifier-bundle/src/CacheWarmer/SerializerCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $container->privates['exercise_html_purifier.cache_warmer.serializer'] = new \Exercise\HTMLPurifierBundle\CacheWarmer\SerializerCacheWarmer([($container->targetDir.''.'/htmlpurifier')], ['default'], ($container->privates['exercise_html_purifier.purifiers_registry'] ?? $container->load('getExerciseHtmlPurifier_PurifiersRegistryService')), ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()));
    }
}
