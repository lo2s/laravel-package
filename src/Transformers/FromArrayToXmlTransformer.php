<?php

namespace Lo2s\LaravelPackage\Transformers;

use Lo2s\LaravelPackage\Contracts\FromArrayToStringTransformer;
use SimpleXMLElement;

class FromArrayToXmlTransformer implements FromArrayToStringTransformer
{
    public function transform(array $data): string
    {
        $flippedData = array_flip($data);

        $xml = new SimpleXMLElement('<payment/>');
        array_walk_recursive($flippedData, [$xml, 'addChild']);

        return $xml->asXML();
    }
}
