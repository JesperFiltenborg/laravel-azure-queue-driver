<?php

namespace JesperFiltenborg\LaravelAzureQueueDriver;

use JesperFiltenborg\LaravelAzureQueueDriver\Commands\LaravelAzureQueueDriverCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
