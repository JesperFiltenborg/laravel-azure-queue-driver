<?php

namespace JesperFiltenborg\LaravelAzureQueueDriver\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use JesperFiltenborg\LaravelAzureQueueDriver\LaravelAzureQueueDriverServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'JesperFiltenborg\\LaravelAzureQueueDriver\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAzureQueueDriverServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-azure-queue-driver_table.php.stub';
        $migration->up();
        */
    }
}
