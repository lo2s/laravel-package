<?php

namespace Lo2s\LaravelPackage\Requests;

use Lo2s\LaravelPackage\Contracts\Transformable;

class GetPaymentStatusRequest implements Transformable
{
    protected string $paymentId;

    public function __construct(string $paymentId)
    {
        $this->paymentId = $paymentId;
    }

    public function getPaymentId(): string
    {
        return $this->paymentId;
    }

    public function setPaymentId(string $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    public function toArray(): array
    {
        return [
            'paymentId' => $this->paymentId,
        ];
    }
}
