<?php

namespace Lo2s\LaravelPackage\Factories;

use Lo2s\LaravelPackage\Contracts\FromArrayToStringTransformer;
use Lo2s\LaravelPackage\Contracts\FromStringToArrayTransformer;
use Lo2s\LaravelPackage\Contracts\PaymentClientFactory;
use Lo2s\LaravelPackage\Contracts\PaymentProvider;
use Lo2s\LaravelPackage\PaymentProviders\JsonPaymentProvider;
use Lo2s\LaravelPackage\Transformers\FromArrayToJsonTransformer;
use Lo2s\LaravelPackage\Transformers\FromJsonStringToArrayTransformer;

class JsonPaymentClientFactory implements PaymentClientFactory
{
    public function createRequestTransformer(): FromArrayToStringTransformer
    {
        return new FromArrayToJsonTransformer();
    }

    public function createResponseTransformer(): FromStringToArrayTransformer
    {
        return new FromJsonStringToArrayTransformer();
    }

    public function createPaymentProvider(): PaymentProvider
    {
        return new JsonPaymentProvider();
    }
}
