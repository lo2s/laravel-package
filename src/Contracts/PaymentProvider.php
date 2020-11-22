<?php

namespace Lo2s\LaravelPackage\Contracts;

interface PaymentProvider
{
    public function createPayment(string $request): string;

    public function getPaymentStatus(string $request): string;
}
