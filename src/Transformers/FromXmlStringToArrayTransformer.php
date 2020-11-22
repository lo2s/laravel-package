<?php

namespace Lo2s\LaravelPackage\Transformers;

use Lo2s\LaravelPackage\Contracts\FromStringToArrayTransformer;

class FromXmlStringToArrayTransformer implements FromStringToArrayTransformer
{
    public function transform(string $data): array
    {
        return (array) simplexml_load_string($data);
    }
}
