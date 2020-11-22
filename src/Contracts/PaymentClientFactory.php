<?php

namespace Lo2s\LaravelPackage\Contracts;

interface PaymentClientFactory
{
    public function createRequestTransformer(): FromArrayToStringTransformer;

    public function createResponseTransformer(): FromStringToArrayTransformer;

    public function createPaymentProvider(): PaymentProvider;
}
