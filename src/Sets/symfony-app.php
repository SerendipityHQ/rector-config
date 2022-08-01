<?php

declare (strict_types=1);
namespace SerendipityHQ\Integration\Rector\Sets;

use Rector\Config\RectorConfig;
use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $containerConfigurator) : void {
    $containerConfigurator->import(SetList::ACTION_INJECTION_TO_CONSTRUCTOR_INJECTION);
    $containerConfigurator->import(SetList::CODE_QUALITY);
    $containerConfigurator->import(SetList::CODING_STYLE);
    // $containerConfigurator->import(SetList::DEAD_CODE);
    // $containerConfigurator->import(SetList::EARLY_RETURN);
    // $containerConfigurator->import(SetList::FLYSYSTEM_20);
    $containerConfigurator->import(SetList::MONOLOG_20);
    // $containerConfigurator->import(SetList::NAMING);
    // $containerConfigurator->import(SetList::ORDER);
    $containerConfigurator->import(SetList::PHP_52);
    $containerConfigurator->import(SetList::PHP_53);
    $containerConfigurator->import(SetList::PHP_54);
    $containerConfigurator->import(SetList::PHP_56);
    $containerConfigurator->import(SetList::PHP_70);
    $containerConfigurator->import(SetList::PHP_71);
    $containerConfigurator->import(SetList::PHP_72);
    $containerConfigurator->import(SetList::PHP_73);
    // $containerConfigurator->import(SetList::PHP_74);
    // $containerConfigurator->import(SetList::PHP_80);
    // $containerConfigurator->import(SetList::PHP_81);
    // $containerConfigurator->import(SetList::PRIVATIZATION);
    // $containerConfigurator->import(SetList::PSR_4);
    $containerConfigurator->import(SetList::TYPE_DECLARATION);
    // $containerConfigurator->import(SetList::TYPE_DECLARATION_STRICT);

    $services = $containerConfigurator->services();
    $services->set(\Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector::class);
    $services->set(\Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector::class);
    $services->set(\Rector\DeadCode\Rector\Node\RemoveNonExistingVarAnnotationRector::class);

    $containerConfigurator->importNames();
    $containerConfigurator->importShortClasses();
};
