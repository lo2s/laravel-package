<?php

namespace Lo2s\LaravelPackage\Contracts;

interface FromArrayToStringTransformer
{
    public function transform(array $data): string;
}
