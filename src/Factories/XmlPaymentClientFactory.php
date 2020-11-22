<?php

namespace Lo2s\LaravelPackage\Factories;

use Lo2s\LaravelPackage\Contracts\FromArrayToStringTransformer;
use Lo2s\LaravelPackage\Contracts\FromStringToArrayTransformer;
use Lo2s\LaravelPackage\Contracts\PaymentClientFactory;
use Lo2s\LaravelPackage\Contracts\PaymentProvider;
use Lo2s\LaravelPackage\PaymentProviders\XmlPaymentProvider;
use Lo2s\LaravelPackage\Transformers\FromArrayToXmlTransformer;
use Lo2s\LaravelPackage\Transformers\FromXmlStringToArrayTransformer;

class XmlPaymentClientFactory implements PaymentClientFactory
{
    public function createRequestTransformer(): FromArrayToStringTransformer
    {
        return new FromArrayToXmlTransformer();
    }

    public function createResponseTransformer(): FromStringToArrayTransformer
    {
        return new FromXmlStringToArrayTransformer();
    }

    public function createPaymentProvider(): PaymentProvider
    {
        return new XmlPaymentProvider();
    }
}
