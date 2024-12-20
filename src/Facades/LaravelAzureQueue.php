<?php

namespace JesperFiltenborg\LaravelAzureQueueDriver\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JesperFiltenborg\LaravelAzureQueueDriver\LaravelAzureQueueDriver
 */
class LaravelAzureQueueDriver extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \JesperFiltenborg\LaravelAzureQueueDriver\LaravelAzureQueueDriver::class;
    }
}
