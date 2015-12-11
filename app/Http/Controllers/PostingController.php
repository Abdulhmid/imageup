<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models as Md;
use App\Additionals\Datatables\PostingDatatable;

class PostingController extends Controller
{

  protected $model;
  protected $title = "Posting";
  protected $folder = "module.post";
  protected $url = "/posting";
  protected $form;

  public function __construct(Md\Posts $posts,
                              Md\Comments $comments)
  {
    $this->model = $posts;
    $this->comments = $comments;
  }

  public function getIndex()
  {
      return view($this->folder.".index", [
                        'title' => $this->title ]);
  }

  public function anyData(){
    return (new PostingDatatable($this->model))->make();
  }

}
