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

}
