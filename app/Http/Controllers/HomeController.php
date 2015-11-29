<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  protected $model;
	protected $title = "Welcome";
	protected $folder = "module.home";
	protected $url = "/";
	protected $form;

	public function __construct()
	{
	}

	public function getIndex()
	{
		  return view($this->folder.".index", ['title' => $this->title]);
	}

  public function getLogin(){
      return view($this->folder.".login", ['title' => $this->title]);
  }

  public function getRegister(){
      return view($this->folder.".register", ['title' => $this->title]);
  }

}
