<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
  protected $model;
	protected $title = "Dashboard";
	protected $folder = "module.admin";
	protected $url = "/";
	protected $form;

	public function __construct()
	{
	}

	public function getIndex()
	{
		return view($this->folder.".index", ['title' => $this->title]);
	}
}
