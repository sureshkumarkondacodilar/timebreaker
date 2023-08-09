<?php

declare (strict_types=1);
namespace RectorPrefix20211213;

return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/../config.php');
    $services = $containerConfigurator->services();
    $manualAddedComposerExtensions = [new \Rector\Composer\ValueObject\PackageAndVersion('koehlersimon/slug', '^3.0')];
    $services->set('change_composer_json_for_extensions')->class(\Rector\Composer\Rector\ChangePackageVersionComposerRector::class)->configure(\array_merge($composerExtensions, $manualAddedComposerExtensions));
};