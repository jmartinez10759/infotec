<?php

namespace App\Http\Services;

use App\Http\Repositories\ImageRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

/**
 * @property ImageRepository _imageRepository
 */
class ImageService
{
    public function __construct()
    {
        $this->_imageRepository = new ImageRepository();
    }

    public function indexed()
    {
        return $this->_imageRepository->all();
    }

    public function created(Request $request)
    {
        return $this->_imageRepository->create($request->all(),$request->all());
    }



}