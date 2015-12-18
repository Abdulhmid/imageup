<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models as Md;

class FrontendController extends Controller
{

  public function __construct(Md\Posts $model)
  {
      $this->model    = $model;
  }

  public function getIndex()
  {
    echo "Hai";
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
    $input = $request->only('article','hastag','link');
    $image = $request->image;
    $query = $this->model->create($input);
    /*
    ** Add Image
    */
    $explodeImage = explode(",", $image);
    foreach ($explodeImage as $key => $value) {
      \DB::table('post_detail')->insert(
          ['image' => $value, 'post_id' => $query->id]
      );
    }

  }

}
