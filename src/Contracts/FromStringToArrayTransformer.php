<?php

namespace Lo2s\LaravelPackage\Contracts;

interface FromStringToArrayTransformer
{
    public function transform(string $data): array;
}
