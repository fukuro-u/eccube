<?php

namespace ContainerPUneJ7x;

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/PluginRepository.php';
class PluginRepositoryGhost5e3b452 extends \Eccube\Repository\PluginRepository implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'_class' => [parent::class, '_class', null],
        "\0".'*'."\0".'_em' => [parent::class, '_em', null],
        "\0".'*'."\0".'_entityName' => [parent::class, '_entityName', null],
        "\0".'*'."\0".'eccubeConfig' => [parent::class, 'eccubeConfig', null],
        "\0".'Doctrine\\Bundle\\DoctrineBundle\\Repository\\LazyServiceEntityRepository'."\0".'entityClass' => ['Doctrine\\Bundle\\DoctrineBundle\\Repository\\LazyServiceEntityRepository', 'entityClass', null],
        "\0".'Doctrine\\Bundle\\DoctrineBundle\\Repository\\LazyServiceEntityRepository'."\0".'registry' => ['Doctrine\\Bundle\\DoctrineBundle\\Repository\\LazyServiceEntityRepository', 'registry', null],
        '_class' => [parent::class, '_class', null],
        '_em' => [parent::class, '_em', null],
        '_entityName' => [parent::class, '_entityName', null],
        'eccubeConfig' => [parent::class, 'eccubeConfig', null],
        'entityClass' => ['Doctrine\\Bundle\\DoctrineBundle\\Repository\\LazyServiceEntityRepository', 'entityClass', null],
        'registry' => ['Doctrine\\Bundle\\DoctrineBundle\\Repository\\LazyServiceEntityRepository', 'registry', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PluginRepositoryGhost5e3b452', false)) {
    \class_alias(__NAMESPACE__.'\\PluginRepositoryGhost5e3b452', 'PluginRepositoryGhost5e3b452', false);
}
