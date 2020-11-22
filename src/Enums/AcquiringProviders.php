<?php

namespace Lo2s\LaravelPackage\Enums;

final class AcquiringProviders
{
    public const ACQUIRING_PROVIDER_JSON = 'json';
    public const ACQUIRING_PROVIDER_XML = 'xml';

    public static function getProvidersList(): array
    {
        return [
            self::ACQUIRING_PROVIDER_JSON,
            self::ACQUIRING_PROVIDER_XML,
        ];
    }
}
