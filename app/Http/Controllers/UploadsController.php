<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use Intervention\Image\ImageManager;

class UploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
    }

    public function getUploads(){
        $image = \Input::file("files");
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        \Image::make($image->getRealPath())->resize(580, 367)->save('images/'.$filename);
        $fullname = '/images/'.$filename;
        return \Response::json(array('name' => $fullname));
    }

}
