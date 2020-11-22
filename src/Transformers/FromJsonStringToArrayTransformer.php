<?php

namespace Lo2s\LaravelPackage\Transformers;

use Lo2s\LaravelPackage\Contracts\FromStringToArrayTransformer;

class FromJsonStringToArrayTransformer implements FromStringToArrayTransformer
{
    public function transform(string $data): array
    {
        return json_decode($data, true);
    }
}
