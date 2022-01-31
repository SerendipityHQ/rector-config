<?php

declare (strict_types=1);
namespace SerendipityHQ\Integration\Rector;

use Rector\Core\Configuration\Option;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ParametersConfigurator;

class SerendipityHQ
{
    public const SHQ_LIBRARY = __DIR__ . '/Sets/library.php';
    public const SHQ_LIBRARY_SKIP = [
        \Rector\CodeQuality\Rector\Catch_\ThrowWithPreviousExceptionRector::class,
        \Rector\CodeQuality\Rector\Concat\JoinStringConcatRector::class,
        \Rector\CodeQuality\Rector\Identical\SimplifyBoolIdenticalTrueRector::class,
        \Rector\CodingStyle\Rector\Class_\AddArrayDefaultToArrayPropertyRector::class,
        \Rector\CodingStyle\Rector\ClassConst\VarConstantCommentRector::class,
        \Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector::class,
        \Rector\CodingStyle\Rector\ClassMethod\RemoveDoubleUnderscoreInMethodNameRector::class,
        \Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector::class,
        \Rector\CodingStyle\Rector\Switch_\BinarySwitchToIfElseRector::class,
        \Rector\Naming\Rector\Class_\RenamePropertyToMatchTypeRector::class,
        \Rector\Php56\Rector\FunctionLike\AddDefaultValueForUndefinedVariableRector::class, // Maybe good one day
        \Rector\PHPUnit\Rector\Class_\AddSeeTestAnnotationRector::class,
        \Rector\PHPUnit\Rector\ClassMethod\AddDoesNotPerformAssertionToNonAssertingTestRector::class,
        \Rector\Privatization\Rector\MethodCall\PrivatizeLocalGetterToPropertyRector::class,
        \Rector\TypeDeclaration\Rector\ClassMethod\AddArrayParamDocTypeRector::class,
        \Rector\TypeDeclaration\Rector\ClassMethod\AddArrayReturnDocTypeRector::class,
    ];
    public const SHQ_SYMFONY_BUNDLE = __DIR__ . '/Sets/symfony-bundle.php';
    public const SHQ_SYMFONY_BUNDLE_SKIP = [
        // serendipity_hq/aws-ses-monitor
        \Rector\CodeQuality\Rector\Array_\CallableThisArrayToAnonymousFunctionRector::class,
        \Rector\CodeQuality\Rector\Catch_\ThrowWithPreviousExceptionRector::class,
        \Rector\CodeQuality\Rector\Concat\JoinStringConcatRector::class,
        \Rector\CodeQuality\Rector\Identical\SimplifyBoolIdenticalTrueRector::class,
        \Rector\CodingStyle\Rector\Class_\AddArrayDefaultToArrayPropertyRector::class,
        \Rector\CodingStyle\Rector\ClassConst\VarConstantCommentRector::class,
        \Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector::class,
        \Rector\CodingStyle\Rector\ClassMethod\RemoveDoubleUnderscoreInMethodNameRector::class,
        \Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector::class,
        \Rector\CodingStyle\Rector\Switch_\BinarySwitchToIfElseRector::class,
        \Rector\Naming\Rector\Class_\RenamePropertyToMatchTypeRector::class,
        \Rector\Php56\Rector\FunctionLike\AddDefaultValueForUndefinedVariableRector::class, // Maybe good one day
        \Rector\PHPUnit\Rector\Class_\AddSeeTestAnnotationRector::class,
        \Rector\PHPUnit\Rector\ClassMethod\AddDoesNotPerformAssertionToNonAssertingTestRector::class,
        \Rector\Privatization\Rector\MethodCall\PrivatizeLocalGetterToPropertyRector::class,
        \Rector\TypeDeclaration\Rector\ClassMethod\AddArrayParamDocTypeRector::class,
        \Rector\TypeDeclaration\Rector\ClassMethod\AddArrayReturnDocTypeRector::class,
    ];
    public const SHQ_SYMFONY_APP = __DIR__ . '/Sets/symfony-app.php';
    public const SHQ_SYMFONY_APP_SKIP = [
        \Rector\CodeQuality\Rector\Catch_\ThrowWithPreviousExceptionRector::class,
        \Rector\CodeQuality\Rector\Concat\JoinStringConcatRector::class,
        \Rector\CodeQuality\Rector\Identical\SimplifyBoolIdenticalTrueRector::class,
        \Rector\CodingStyle\Rector\Class_\AddArrayDefaultToArrayPropertyRector::class,
        \Rector\CodingStyle\Rector\ClassConst\VarConstantCommentRector::class,
        \Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector::class,
        \Rector\CodingStyle\Rector\ClassMethod\RemoveDoubleUnderscoreInMethodNameRector::class,
        \Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector::class,
        \Rector\CodingStyle\Rector\Switch_\BinarySwitchToIfElseRector::class,
        \Rector\Naming\Rector\Class_\RenamePropertyToMatchTypeRector::class,
        \Rector\Php56\Rector\FunctionLike\AddDefaultValueForUndefinedVariableRector::class, // Maybe good one day
        \Rector\PHPUnit\Rector\Class_\AddSeeTestAnnotationRector::class,
        \Rector\PHPUnit\Rector\ClassMethod\AddDoesNotPerformAssertionToNonAssertingTestRector::class,
        \Rector\Privatization\Rector\MethodCall\PrivatizeLocalGetterToPropertyRector::class,
        \Rector\TypeDeclaration\Rector\ClassMethod\AddArrayParamDocTypeRector::class,
        \Rector\TypeDeclaration\Rector\ClassMethod\AddArrayReturnDocTypeRector::class,
    ];

    public static function buildToSkip(array ...$toSkip):array
    {
        $toSkip = array_merge(...$toSkip);
        $toSkip = array_unique($toSkip);

        return array_values($toSkip);
    }
}
