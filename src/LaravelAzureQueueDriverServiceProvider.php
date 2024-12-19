<?php

namespace Jesper Filtenborg\LaravelAzureQueueDriver;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Jesper Filtenborg\LaravelAzureQueueDriver\Commands\LaravelAzureQueueDriverCommand;

class LaravelAzureQueueDriverServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-azure-queue-driver')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_azure_queue_driver_table')
            ->hasCommand(LaravelAzureQueueDriverCommand::class);
    }
}
