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

  public function postUpload()
  {
      $image = \Input::file('files');
      var_dump($image); exit();
     $filename  = time() . '.' . $image->getClientOriginalExtension();
     \Image::make($image->getRealPath())->resize(580, 367)->save('images/'.$filename);
     $fullname = '/images/'.$filename;
    return \Response::json(array('name' => $fullname));
  		// $file = \Input::file('files');
      // var_dump($file);exit();
      // // $file = $request->file;
  		// if ($file[0]->isValid())
  		// {
  		// 	if(!file_exists('fileman/Uploads/album/')){
  		// 		mkdir('fileman/Uploads/album/');
  		// 	}
  		// 	$name = $file[0]->getClientOriginalName();
  		// 	$size = $file[0]->getSize();
  		// 	$mime = $file[0]->getMimeType();
  		// 	$destinationPath = 'fileman/Uploads/album/';
  		//     $file[0]->move($destinationPath,$name);
  		// 	$result[0] = array(
  		// 		'name' => $name,
  		// 		'size' => $size,
  		// 		'type' => $mime,
  		// 		'url' => \URL::to('fileman/Uploads/album/')
  		// 	);
  		// 	return $result;
  		// }
      // $image = \Input::file('file');
      // $filename  = time() . '.' . $image->getClientOriginalExtension();
      // \Image::make($image->getRealPath())->resize(580, 367)->save('images/'.$filename);
      // $fullname = '/images/'.$filename;
      // return \Response::json(array('name' => $fullname));
  }

  public function getStatus(Request $request)
  {
    echo $request->article;
  }

}
