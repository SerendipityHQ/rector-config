<?php

declare (strict_types=1);
namespace SerendipityHQ\Integration\Rector;

class SerendipityHQ
{
    public const SHQ_LIBRARY = __DIR__ . '/Sets/library.php';
    public const SHQ_LIBRARY_SKIP = [
        \Rector\CodeQuality\Rector\Catch_\ThrowWithPreviousExceptionRector::class,
        \Rector\CodeQuality\Rector\ClassMethod\LocallyCalledStaticMethodToNonStaticRector::class,
        \Rector\CodeQuality\Rector\Concat\JoinStringConcatRector::class,
        \Rector\CodeQuality\Rector\Identical\FlipTypeControlToUseExclusiveTypeRector::class,
        \Rector\CodeQuality\Rector\Identical\SimplifyBoolIdenticalTrueRector::class,
        \Rector\CodingStyle\Rector\ClassLike\NewlineBetweenClassLikeStmtsRector::class,
        \Rector\CodingStyle\Rector\ClassMethod\MakeInheritedMethodVisibilitySameAsParentRector::class,
        \Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector::class,
        \Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector::class,
        \Rector\Naming\Rector\Class_\RenamePropertyToMatchTypeRector::class,
        \Rector\Php74\Rector\Property\RestoreDefaultNullToNullableTypePropertyRector::class,
        \Rector\Privatization\Rector\MethodCall\PrivatizeLocalGetterToPropertyRector::class,

        // This conflicts with PHP CS Fixer
        \Rector\CodingStyle\Rector\Stmt\NewlineAfterStatementRector::class,

        // Especially in tests, wrongly adds `never` as return type hint
        \Rector\TypeDeclaration\Rector\ClassMethod\ReturnNeverTypeRector::class,
    ];
    public const SHQ_SYMFONY_BUNDLE = __DIR__ . '/Sets/symfony-bundle.php';
    public const SHQ_SYMFONY_BUNDLE_SKIP = [
        // serendipity_hq/aws-ses-monitor
        \Rector\CodeQuality\Rector\Catch_\ThrowWithPreviousExceptionRector::class,
        \Rector\CodeQuality\Rector\ClassMethod\LocallyCalledStaticMethodToNonStaticRector::class,
        \Rector\CodeQuality\Rector\Concat\JoinStringConcatRector::class,
        \Rector\CodeQuality\Rector\Identical\FlipTypeControlToUseExclusiveTypeRector::class,
        \Rector\CodeQuality\Rector\Identical\SimplifyBoolIdenticalTrueRector::class,
        \Rector\CodingStyle\Rector\ClassLike\NewlineBetweenClassLikeStmtsRector::class,
        \Rector\CodingStyle\Rector\ClassMethod\MakeInheritedMethodVisibilitySameAsParentRector::class,
        \Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector::class,
        \Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector::class,
        \Rector\Naming\Rector\Class_\RenamePropertyToMatchTypeRector::class,
        \Rector\Php74\Rector\Property\RestoreDefaultNullToNullableTypePropertyRector::class,
        \Rector\Privatization\Rector\MethodCall\PrivatizeLocalGetterToPropertyRector::class,
        \Rector\Symfony\Symfony43\Rector\StmtsAwareInterface\TwigBundleFilesystemLoaderToTwigRector::class,

        // This conflicts with PHP CS Fixer
        \Rector\CodingStyle\Rector\Stmt\NewlineAfterStatementRector::class,

        // Especially in tests, wrongly adds `never` as return type hint
        \Rector\TypeDeclaration\Rector\ClassMethod\ReturnNeverTypeRector::class,
    ];
    public const SHQ_SYMFONY_APP_SKIP = [
         \Rector\CodeQuality\Rector\Catch_\ThrowWithPreviousExceptionRector::class,
         \Rector\CodeQuality\Rector\ClassMethod\LocallyCalledStaticMethodToNonStaticRector::class,
         \Rector\CodeQuality\Rector\Concat\JoinStringConcatRector::class,
         \Rector\CodeQuality\Rector\Identical\FlipTypeControlToUseExclusiveTypeRector::class,
         \Rector\CodeQuality\Rector\Identical\SimplifyBoolIdenticalTrueRector::class,
         \Rector\CodingStyle\Rector\ClassLike\NewlineBetweenClassLikeStmtsRector::class,
         \Rector\CodingStyle\Rector\ClassMethod\MakeInheritedMethodVisibilitySameAsParentRector::class,
         \Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector::class,
         \Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector::class,
         \Rector\Naming\Rector\Class_\RenamePropertyToMatchTypeRector::class,
         \Rector\Naming\Rector\ClassMethod\RenameVariableToMatchNewTypeRector::class,
         \Rector\Naming\Rector\ClassMethod\RenameParamToMatchTypeRector::class,
         \Rector\Naming\Rector\Assign\RenameVariableToMatchMethodCallReturnTypeRector::class,
         \Rector\Naming\Rector\Foreach_\RenameForeachValueVariableToMatchMethodCallReturnTypeRector::class,
         \Rector\Naming\Rector\Foreach_\RenameForeachValueVariableToMatchExprVariableRector::class,
         \Rector\Privatization\Rector\MethodCall\PrivatizeLocalGetterToPropertyRector::class,
         \Rector\Symfony\Configs\Rector\Closure\ServiceSettersToSettersAutodiscoveryRector::class,

         // This causes an error
         \Rector\Symfony\Configs\Rector\Closure\ServiceArgsToServiceNamedArgRector::class,

        // This conflicts with PHP CS Fixer
        \Rector\CodingStyle\Rector\Stmt\NewlineAfterStatementRector::class,

        // Especially in tests, wrongly adds `never` as return type hint
        \Rector\TypeDeclaration\Rector\ClassMethod\ReturnNeverTypeRector::class,

         // Wrongly removes method parameters violating the interface
         \Rector\DeadCode\Rector\ClassMethod\RemoveUnusedPublicMethodParameterRector::class,
         \Rector\DeadCode\Rector\If_\RemoveAlwaysTrueIfConditionRector::class,
    ];
    public const SHQ_SYMFONY_APP = __DIR__ . '/Sets/symfony-app.php';

    public static function buildToSkip(array ...$toSkip):array
    {
        $toSkip = array_merge(...$toSkip);
        $toSkip = array_unique($toSkip);

        return array_values($toSkip);
    }
}
