<?php namespace App\Http\Repositories;

use App\Models\Image;

class ImageRepository extends BaseRepository
{
    public function __construct()
    {
        $image = new Image();
        parent::__construct($image);
    }

}