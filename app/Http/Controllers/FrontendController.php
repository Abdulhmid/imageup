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

  public function postUpload(){
      $image = \Input::file("files");
      // var_dump($image);
      if ($image[0]->isValid())
      {
        if(!file_exists('images/')){
          mkdir('images/');
        }
        $name = $image[0]->getClientOriginalName();
        $size = $image[0]->getSize();
        $mime = $image[0]->getMimeType();
        $destinationPath = 'images/';
        $image[0]->move($destinationPath,$name);
        $result[0] = array(
          'name' => $name,
          'size' => $size,
          'type' => $mime,
          'url' => \URL::to('images/')
        );
        return $result;
      }
      exit();
      $filename  = time() . '.' . $image->getClientOriginalExtension();
      \Image::make($image->getRealPath())->resize(580, 367)->save('images/'.$filename);
      $fullname = '/images/'.$filename;
      return \Response::json(array('name' => $fullname));
  }

  public function getStatus(Request $request)
  {
    echo $request->article;
  }

}
