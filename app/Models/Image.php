<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Image extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;

    public $table = 'images';
    public $guarded = [];
    public $dates = [
        'deleted_at'
    ];
}
