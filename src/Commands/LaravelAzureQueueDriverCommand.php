<?php

namespace Jesper Filtenborg\LaravelAzureQueueDriver\Commands;

use Illuminate\Console\Command;

class LaravelAzureQueueDriverCommand extends Command
{
    public $signature = 'laravel-azure-queue-driver';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
