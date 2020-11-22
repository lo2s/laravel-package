<?php

namespace Lo2s\LaravelPackage\Factories;

use Lo2s\LaravelPackage\Contracts\PaymentClientFactory;
use Lo2s\LaravelPackage\Enums\AcquiringProviders;
use Lo2s\LaravelPackage\Exceptions\InvalidAcquiringProvider;

class PaymentClientFactoryMaker
{
    public static function makePaymentClientFactory(string $paymentType): PaymentClientFactory
    {
        switch ($paymentType) {
            case AcquiringProviders::ACQUIRING_PROVIDER_JSON:
                return new JsonPaymentClientFactory();

            case AcquiringProviders::ACQUIRING_PROVIDER_XML:
                return new XmlPaymentClientFactory();

            default:
                throw new InvalidAcquiringProvider();
        }
    }
}
