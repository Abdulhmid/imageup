<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Additionals\Datatables\UsersDatatable;
use App\Models as Md;

class UsersController extends Controller
{

    protected $model;
  	protected $title = "Admin System";
  	protected $folder = "module.users";
  	protected $url = "/users";
  	protected $form;

  	public function __construct(Md\Users $users)
  	{
      $this->model = $users;
  	}

    public function getIndex()
    {
        return view($this->folder.".index", [
                          'title' => $this->title ]);
    }

    public function getData(){
      return (new UsersDatatable($this->model))->make();
    }

}
