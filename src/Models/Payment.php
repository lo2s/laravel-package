<?php

namespace Lo2s\LaravelPackage\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Payment extends Model
{
    protected string $primaryKey = 'uuid';
    protected string $keyType = 'string';

    protected $fillable = [
        'payment_id',
        'payment_url',
        'payment_status',
        'payment_provider',
    ];

    protected array $hidden = [
        'payment_id',
        'updated_at',
    ];

    public bool $incrementing = false;

    public static function boot()
    {
        parent::boot();

        // also need to check uniqueness
        self::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}
