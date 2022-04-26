<?php

namespace zoparga\ModelStatus;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use zoparga\ModelStatus\Commands\ModelStatusCommand;

class ModelStatusServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('model-status')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_model-status_table')
            //->hasCommand(ModelStatusCommand::class)
            ;
    }
}
