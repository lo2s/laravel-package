<?php

namespace Lo2s\LaravelPackage\PaymentProviders;

class JsonPaymentProvider extends AbstractPaymentProvider
{
    public function createPayment(string $request): string
    {
        $response = $this->client->post($this->createPaymentUrl, [
            'headers' => $this->headers,
            'body' => $request,
        ]);

        return $this->responseToString($response);
    }

    public function getPaymentStatus(string $request): string
    {
        $response = $this->client->get($this->getPaymentStatusUrl, [
            'headers' => $this->headers,
            'body' => $request,
        ]);

        return $this->responseToString($response);
    }
}
