<?php

namespace Lo2s\LaravelPackage;

use Lo2s\LaravelPackage\Contracts\FromArrayToStringTransformer;
use Lo2s\LaravelPackage\Contracts\FromStringToArrayTransformer;
use Lo2s\LaravelPackage\Contracts\PaymentProvider;
use Lo2s\LaravelPackage\Factories\PaymentClientFactoryMaker;
use Lo2s\LaravelPackage\Models\Payment;
use Lo2s\LaravelPackage\Requests\CreatePaymentRequest;
use Lo2s\LaravelPackage\Requests\GetPaymentStatusRequest;

class Acquiring
{
    protected FromArrayToStringTransformer $requestTransformer;
    protected FromStringToArrayTransformer $responseTransformer;
    protected PaymentProvider $paymentProvider;

    public function __construct(string $paymentType)
    {
        $paymentClientFactory = PaymentClientFactoryMaker::makePaymentClientFactory($paymentType);

        $this->requestTransformer = $paymentClientFactory->createRequestTransformer();
        $this->responseTransformer = $paymentClientFactory->createResponseTransformer();
        $this->paymentProvider = $paymentClientFactory->createPaymentProvider();
    }

    public function createPayment(CreatePaymentRequest $request): Payment
    {
        $transformedRequest = $this->requestTransformer->transform($request->toArray());
        $response = $this->paymentProvider->createPayment($transformedRequest);

        return Payment::create($this->responseTransformer->transform($response));
    }

    public function getPaymentStatus(GetPaymentStatusRequest $request): array
    {
        $transformedRequest = $this->requestTransformer->transform($request->toArray());
        $response = $this->paymentProvider->getPaymentStatus($transformedRequest);

        return array_merge(
            ['payment_id' => $request->getPaymentId()],
            $this->responseTransformer->transform($response)
        );
    }
}
