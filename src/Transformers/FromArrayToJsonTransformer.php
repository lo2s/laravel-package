<?php

namespace Lo2s\LaravelPackage\Transformers;

use Lo2s\LaravelPackage\Contracts\FromArrayToStringTransformer;

class FromArrayToJsonTransformer implements FromArrayToStringTransformer
{
    public function transform(array $data): string
    {
        return json_encode(['payment' => $data]);
    }
}
