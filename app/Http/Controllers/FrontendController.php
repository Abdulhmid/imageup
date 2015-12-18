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
        if(!file_exists('images/posting/')){
          mkdir('images/posting/');
        }
        $name = time().preg_replace('/\s+/', '', $image[0]->getClientOriginalName());
        $size = $image[0]->getSize();
        $mime = $image[0]->getMimeType();
        $destinationPath = 'images/posting/';
        $image[0]->move($destinationPath,$name);
        $result[0] = array(
          'name' => $name,
          'size' => $size,
          'type' => $mime,
          'pathPublic' => "images/posting/".$name,
          'url' => \URL::to('images/posting/')
        );
        return $result;
      }
  }

  public function postStatus(Request $request)
  {
    $rt = $request->image;
    $article = $request->article;
    return $rt;
  }

}
