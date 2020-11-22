<?php

namespace Lo2s\LaravelPackage\PaymentProviders;

use GuzzleHttp\Client;
use Lo2s\LaravelPackage\Contracts\PaymentProvider;
use Lo2s\LaravelPackage\Enums\AcquiringProviders;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractPaymentProvider implements PaymentProvider
{
    protected Client $client;
    protected string $createPaymentUrl;
    protected string $getPaymentStatusUrl;
    protected array $headers;

    public function __construct()
    {
        $this->client = app()->make(Client::class);
        $this->createPaymentUrl = config('acquiring.url.create_payment_url');
        $this->getPaymentStatusUrl = config('acquiring.url.get_payment_status_url');
        $this->headers = [
            'Content-Type' => config('acquiring.default_provider') === AcquiringProviders::ACQUIRING_PROVIDER_JSON
                ? 'application/json'
                : 'application/xml',
        ];
    }

    protected function responseToString(ResponseInterface $response): string
    {
        return $response->getBody()->getContents();
    }
}
