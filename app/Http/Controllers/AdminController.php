<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models as Md;

class AdminController extends Controller
{
  	protected $model;
	protected $title = "Dashboard";
	protected $folder = "module.admin";
	protected $url = "/";
	protected $form;

	public function __construct(Md\Users $users)
	{
		$this->users = $users;
	}

	public function getIndex($parameter = "")
	{
		$date = \DashboardHelpers::filter(date('m'),date('Y'),1);
		foreach (\DashboardHelpers::filter(date('m'),date('Y'),2) as $key => $value) {
			$postData[] = \DashboardHelpers::getPostCount($value); 
		}
		$dataPost = json_encode($postData);

		return view($this->folder.".index", [
						'title' => $this->title,
						'dateList'  => json_encode($date),
						'postData'  => $dataPost
					]);
	}

	public function getFilter($month ="", $year = ""){
		$date = \DashboardHelpers::filter($month,$year,1);
		foreach (\DashboardHelpers::filter($month,$year,2) as $key => $value) {
			$postData[] = \DashboardHelpers::getPostCount($value); 
		}
		$data['dateList'] = json_encode($date);
		$data['dataPost'] = json_encode($postData);
		
		return $data; 
	}

	public function getUsersCount($status = ""){
		return $this->users->whereActive($status)->count();
	}

}
