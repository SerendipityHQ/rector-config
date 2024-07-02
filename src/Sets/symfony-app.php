<?php

declare (strict_types=1);
namespace SerendipityHQ\Integration\Rector\Sets;

use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\PHPUnit\Set\PHPUnitLevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Symfony\Set\SensiolabsSetList;
use Rector\Symfony\Set\SwiftmailerSetList;
use Rector\Symfony\Set\SymfonySetList;
use Rector\Symfony\Set\TwigSetList;

return static function (RectorConfig $containerConfigurator) : void {
    $containerConfigurator->import(SetList::CODE_QUALITY);
    $containerConfigurator->import(SetList::CODING_STYLE);
    // $containerConfigurator->import(SetList::DEAD_CODE);
    // $containerConfigurator->import(SetList::EARLY_RETURN);
    // $containerConfigurator->import(SetList::FLYSYSTEM_20);
    // $containerConfigurator->import(SetList::NAMING);
    // $containerConfigurator->import(SetList::ORDER);

    $containerConfigurator->import(SymfonySetList::SYMFONY_CODE_QUALITY);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_CODE_QUALITY);

    // $containerConfigurator->import(SetList::PRIVATIZATION);
    // $containerConfigurator->import(SetList::PSR_4);
    $containerConfigurator->import(SetList::TYPE_DECLARATION);
    // $containerConfigurator->import(SetList::TYPE_DECLARATION_STRICT);

    $containerConfigurator->rule(\Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector::class);
    $containerConfigurator->rule(\Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector::class);
    $containerConfigurator->rule(\Rector\DeadCode\Rector\Node\RemoveNonExistingVarAnnotationRector::class);

    $containerConfigurator->importNames();
    $containerConfigurator->importShortClasses(false);
};
