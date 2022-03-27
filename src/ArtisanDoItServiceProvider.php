<?php

namespace Ffaa1234\ArtisanDoIt;

use Ffaa1234\ArtisanDoIt\Commands\ArtisanDoItCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ArtisanDoItServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('artisan-do-it')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_artisan-do-it_table')
            ->hasCommand(ArtisanDoItCommand::class);
    }
}
