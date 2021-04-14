<?php

namespace Ueberdosis\HocuspocusLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HocuspocusLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('hocuspocus-laravel')
            ->hasConfigFile()
            ->hasMigration('create_hocuspocus_laravel_table');
    }
}