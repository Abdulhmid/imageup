<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

  public function getIndex()
  {
    echo "string";
  }

  public function getStatus(Request $request)
  {
    echo $request->article;
  }

  public function getUploads()
  {
    $image = \Input::file('file');
    $filename  = time() . '.' . ".jpg";
    \Image::make($image->getRealPath())->resize(580, 367)->save('photo/'.$filename);
    $fullname = '/images/'.$filename;
    return \Response::json(array('name' => $fullname));
  }

}
