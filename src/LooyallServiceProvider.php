<?php

namespace Looyall\Looyall;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Looyall\Looyall\Commands\LooyallCommand;

class LooyallServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('looyall')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_looyall_table')
            ->hasCommand(LooyallCommand::class);
    }
}
