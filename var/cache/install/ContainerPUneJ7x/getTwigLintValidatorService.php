<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigLintValidatorService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Form\Validator\TwigLintValidator' shared autowired service.
     *
     * @return \Eccube\Form\Validator\TwigLintValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Validator/TwigLintValidator.php';

        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->privates['Eccube\\Form\\Validator\\TwigLintValidator'])) {
            return $container->privates['Eccube\\Form\\Validator\\TwigLintValidator'];
        }

        return $container->privates['Eccube\\Form\\Validator\\TwigLintValidator'] = new \Eccube\Form\Validator\TwigLintValidator($a);
    }
}
