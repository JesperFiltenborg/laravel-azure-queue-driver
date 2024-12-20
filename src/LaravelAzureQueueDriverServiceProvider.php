<?php

namespace JesperFiltenborg\LaravelAzureQueueDriver;

use Illuminate\Queue\QueueManager;
use JesperFiltenborg\LaravelAzureQueueDriver\Queue\Connectors\AzureServiceBusConnector;
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
            ->hasConfigFile();
    }

    public function packageRegistered(): void
    {
        $this->app->afterResolving('queue', function ($manager) {
            $this->registerAzureConnector($manager);
        });
    }

    protected function registerAzureConnector(QueueManager $manager)
    {
        $manager->extend('azure', function () {
            return new AzureServiceBusConnector;
        });
    }
}
