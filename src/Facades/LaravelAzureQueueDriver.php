<?php

namespace Jesper Filtenborg\LaravelAzureQueueDriver\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jesper Filtenborg\LaravelAzureQueueDriver\LaravelAzureQueueDriver
 */
class LaravelAzureQueueDriver extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Jesper Filtenborg\LaravelAzureQueueDriver\LaravelAzureQueueDriver::class;
    }
}
