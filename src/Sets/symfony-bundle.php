<?php

declare (strict_types=1);
namespace SerendipityHQ\Integration\Rector\Sets;

use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use Rector\Php81\Rector\Property\ReadOnlyPropertyRector;
use Rector\Php82\Rector\Class_\ReadOnlyClassRector;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\PHPUnit\Set\PHPUnitLevelSetList;
use Rector\Set\ValueObject\SetList;
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
    $containerConfigurator->import(SetList::TYPE_DECLARATION);

    $containerConfigurator->rule(\Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector::class);
    $containerConfigurator->rule(\Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector::class);
    $containerConfigurator->rule(\Rector\DeadCode\Rector\Node\RemoveNonExistingVarAnnotationRector::class);

    // Promoted and readonly properties: Rector applies each only when the project's PHP version supports it.
    $containerConfigurator->rule(ClassPropertyAssignToConstructorPromotionRector::class);
    $containerConfigurator->rule(ReadOnlyPropertyRector::class);
    $containerConfigurator->rule(ReadOnlyClassRector::class);

    $containerConfigurator->importNames();
    $containerConfigurator->importShortClasses(false);
};
