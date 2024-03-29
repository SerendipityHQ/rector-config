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
    $containerConfigurator->import(SetList::PHP_52);
    $containerConfigurator->import(SetList::PHP_53);
    $containerConfigurator->import(SetList::PHP_54);
    $containerConfigurator->import(SetList::PHP_56);
    $containerConfigurator->import(SetList::PHP_70);
    $containerConfigurator->import(SetList::PHP_71);
    $containerConfigurator->import(SetList::PHP_72);
    $containerConfigurator->import(SetList::PHP_73);
    $containerConfigurator->import(SetList::PHP_74);
    $containerConfigurator->import(SetList::PHP_80);
    $containerConfigurator->import(SetList::PHP_81);

    $containerConfigurator->import(SymfonySetList::SYMFONY_31);
    $containerConfigurator->import(SymfonySetList::SYMFONY_32);
    $containerConfigurator->import(SymfonySetList::SYMFONY_33);
    $containerConfigurator->import(SymfonySetList::SYMFONY_34);
    $containerConfigurator->import(SymfonySetList::SYMFONY_40);
    $containerConfigurator->import(SymfonySetList::SYMFONY_41);
    $containerConfigurator->import(SymfonySetList::SYMFONY_42);
    $containerConfigurator->import(SymfonySetList::SYMFONY_43);
    $containerConfigurator->import(SymfonySetList::SYMFONY_44);

    $containerConfigurator->import(SymfonySetList::SYMFONY_50);
    $containerConfigurator->import(SymfonySetList::SYMFONY_50_TYPES);
    $containerConfigurator->import(SymfonySetList::SYMFONY_51);
    $containerConfigurator->import(SymfonySetList::SYMFONY_52);
    $containerConfigurator->import(SymfonySetList::SYMFONY_52_VALIDATOR_ATTRIBUTES);
    $containerConfigurator->import(SymfonySetList::SYMFONY_53);
    $containerConfigurator->import(SymfonySetList::SYMFONY_54);

    $containerConfigurator->import(SymfonySetList::SYMFONY_60);
    $containerConfigurator->import(SymfonySetList::SYMFONY_61);
    $containerConfigurator->import(SymfonySetList::SYMFONY_62);

    $containerConfigurator->import(SymfonySetList::SYMFONY_CODE_QUALITY);
    $containerConfigurator->import(SymfonySetList::SYMFONY_CONSTRUCTOR_INJECTION);
    $containerConfigurator->import(SymfonySetList::ANNOTATIONS_TO_ATTRIBUTES);

    $containerConfigurator->import(TwigSetList::TWIG_112);
    $containerConfigurator->import(TwigSetList::TWIG_127);
    $containerConfigurator->import(TwigSetList::TWIG_134);
    $containerConfigurator->import(TwigSetList::TWIG_140);
    $containerConfigurator->import(TwigSetList::TWIG_20);
    $containerConfigurator->import(TwigSetList::TWIG_240);
    $containerConfigurator->import(TwigSetList::TWIG_UNDERSCORE_TO_NAMESPACE);

    $containerConfigurator->import(DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_CODE_QUALITY);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_COMMON_20);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_ORM_25);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_ORM_29);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_DBAL_211);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_DBAL_30);

    // I'm not sure this is what we want
    // Read this for more info: https://tomasvotruba.com/blog/2017/10/16/how-to-use-repository-with-doctrine-as-service-in-symfony/
    // $containerConfigurator->import(\Rector\Doctrine\Set\DoctrineSetList::DOCTRINE_REPOSITORY_AS_SERVICE);

    $containerConfigurator->import(PHPUnitLevelSetList::UP_TO_PHPUNIT_90);

    // $containerConfigurator->import(SetList::PRIVATIZATION);
    // $containerConfigurator->import(SetList::PSR_4);
    $containerConfigurator->import(SetList::TYPE_DECLARATION);
    // $containerConfigurator->import(SetList::TYPE_DECLARATION_STRICT);

    /*
    // Waiting for this:
    // https://github.com/thecodingmachine/safe/issues/375
    $safeFilePathname = __DIR__ . '/../../../../thecodingmachine/safe/rector-migrate.php';
    if(file_exists($safeFilePathname)) {
        $containerConfigurator->import($safeFilePathname);
    }
    */

    $containerConfigurator->rule(\Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector::class);
    $containerConfigurator->rule(\Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector::class);
    $containerConfigurator->rule(\Rector\DeadCode\Rector\Node\RemoveNonExistingVarAnnotationRector::class);

    $containerConfigurator->importNames();
    $containerConfigurator->importShortClasses(false);
};
