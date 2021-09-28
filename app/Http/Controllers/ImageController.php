<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ImageService;
use App\Http\Resources\{ImageCollection,ImageResource};
use App\Http\Requests\{ImageRequest};

class ImageController extends Controller
{

    public function __construct()
    {
        $this->_imageService = new ImageService();   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): ImageCollection
    {
        return new ImageCollection($this->_imageService->indexed());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): ImageResource
    {
        return new ImageResource($this->_imageService->created($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ImageResource($this->_imageService->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImageRequest $request, $id)
    {
        return new ImageResource($this->_imageService->update($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploaded(ImageRequest $request)
    {
        logger("uploaded");
    }
}
