<?php

namespace App\Models;

use Illuminate\Support\Str;

trait UsesUuid
{
    protected static function bootUsesUuid()
    {
        static::creating(function ($model) {
            if (! $model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
    /**
     * @return false
     */
    public function getIncrementing(): bool
    {
        return false;
    }
    /**
     * @return string
     */
    public function getKeyType(): string
    {
        return 'string';
    }

}
