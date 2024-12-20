<?php

namespace JesperFiltenborg\LaravelAzureQueueDriver\Tests;

use JesperFiltenborg\LaravelAzureQueueDriver\LaravelAzureQueueDriverServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAzureQueueDriverServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app) {}
}
