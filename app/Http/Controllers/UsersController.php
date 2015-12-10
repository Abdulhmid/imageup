<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Additionals\Datatables\UsersDatatable;
use App\Models as Md;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\UsersForm;

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
      $this->form = UsersForm::class;
  	}

    public function getIndex()
    {
        return view($this->folder.".index", [
                          'title' => $this->title ]);
    }

    public function getCreate(FormBuilder $formBuilder)
  	{
  		$form = $formBuilder->create($this->form, [
  			'method' => 'POST',
  			'files' => true,
  			'url' => $this->url.'/store'
  		]);

  		return view($this->folder.".form", [
  			'title' => $this->title,
  			'form'	=> $form
  		]);
  	}

    public function getData(){
      return (new UsersDatatable($this->model))->make();
    }

}
