<?php

namespace JesperFiltenborg\LaravelAzureQueueDriver\Queue\Connectors;

use Illuminate\Queue\Connectors\SqsConnector;
use Illuminate\Support\Arr;
use JesperFiltenborg\LaravelAzureQueueDriver\Azure\Client;
use JesperFiltenborg\LaravelAzureQueueDriver\LaravelAzureQueue;

class AzureServiceBusConnector extends SqsConnector
{
    /**
     * Establish a queue connection.
     *
     *
     * @return \Illuminate\Contracts\Queue\Queue
     */
    public function connect(array $config)
    {
        if (! empty($config['key']) && ! empty($config['secret'])) {
            $config['SasToken'] = function ($uri) use ($config) {
                $targetUri = strtolower(rawurlencode(strtolower($uri)));

                // Set token lifetime now + 1 week
                $expires = time() + 604800;
                $signature = rawurlencode(base64_encode(hash_hmac('sha256', $targetUri."\n".$expires, $config['secret'], true)));

                return 'SharedAccessSignature sr='.$targetUri.'&sig='.$signature.'&se='.$expires.'&skn='.$config['key'];
            };
        }

        return new LaravelAzureQueue(
            new Client($config),
            $config['queue'],
            Arr::get($config, 'prefix', ''),
            Arr::get($config, 'suffix', '')
        );
    }
}
