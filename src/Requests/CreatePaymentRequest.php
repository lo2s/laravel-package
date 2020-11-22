<?php

namespace Lo2s\LaravelPackage\Requests;

use Lo2s\LaravelPackage\Contracts\Transformable;

class CreatePaymentRequest implements Transformable
{
    protected string $fullName;
    protected float $amount;
    protected string $invoiceId;
    protected string $description;

    public function __construct(string $fullName, float $amount, string $invoiceId, string $description)
    {
        $this->fullName = $fullName;
        $this->amount = $amount;
        $this->invoiceId = $invoiceId;
        $this->description = $description;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }

    public function setInvoiceId(string $invoiceId): void
    {
        $this->invoiceId = $invoiceId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function toArray(): array
    {
        return [
            'fullName' => $this->fullName,
            'amount' => $this->amount,
            'invoiceId' => $this->invoiceId,
            'description' => $this->description,
        ];
    }
}
