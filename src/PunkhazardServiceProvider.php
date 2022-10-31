<?php

namespace Lydenn\Punkhazard;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Lydenn\Punkhazard\Commands\PunkhazardCommand;

class PunkhazardServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('punkhazard')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_punkhazard_table')
            ->hasMigration('create_countries_table')
            ->hasCommand(PunkhazardCommand::class);
    }
}
