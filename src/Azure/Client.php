<?php

namespace JesperFiltenborg\LaravelAzureQueueDriver\Azure;

use Illuminate\Support\Facades\Http;

class Client
{
    public function __construct(protected array $config)
    {
        //
    }

    public function getQueueAttributes(string $queue)
    {
        $url = $this->config['prefix'].$queue;
        $response = Http::withHeaders([
            'Authorization' => $this->config['SasToken']($url),
            'Content-Type' => 'application/json',
            'ContentType' => 'application/atom+xml;type=entry;charset=utf-8',
        ])->get($url);

        return data_get($this->decodeResponse($response), 'content.QueueDescription');
    }

    private function decodeResponse($response)
    {
        if (! $response->successful()) {
            return $response->throw()->json();
        }

        $xml = simplexml_load_string($response->body(), 'SimpleXMLElement', LIBXML_NOCDATA);

        return json_decode(json_encode($xml), true);
    }
}
