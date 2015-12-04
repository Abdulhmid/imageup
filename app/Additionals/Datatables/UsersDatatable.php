<?php
namespace App\Additionals\Datatables;

use Datatables;

class UsersDatatable {

	protected $model;
	public $data;

	public function __construct($model)
	{
		$this->model = $model;
		$this->getData();
	}

	protected function getData()
	{
		$this->data = $this
			->model
			->select('id','fullname','email','phone','photo','active','created_by','created_at')
			->orderBy('created_at','desc');
	}

	public function make()
	{
		return \Datatables::of($this->data)
			->addColumn('action', '
	        	<a href="{!! url(GlobalHelpers::indexUrl().\'/edit/\'.$id) !!}"
						class="btn btn-success btn-xs" data-toggle="tooltip"
						data-original-title="Edit">
					<i class="fa fa-pencil"></i>
				</a>
				<a href="{!! url(GlobalHelpers::indexUrl().\'/delete/\'.$id) !!}"
					class="btn btn-danger btn-xs" data-toggle="tooltip"
					data-original-title="Delete"
					onclick="swal_alert(this); return false;">
					<i class="fa fa-trash-o"></i>
				</a>')
			->editColumn('photo','<img src="{!! GlobalHelpers::checkImage($photo) !!}"
														style="max-height:100px" class="thumbnail"> ')
			->editColumn('active','
					<span class="label {{ $active == 1 ? \'label-success\' : \'label-danger\' }}">
						{{$active == 1 ? "Active" : "Not Active"}}
					</span>
			')
			->editColumn('created_at','{!! GlobalHelpers::formatDate($created_at) !!} ')
			->removeColumn('id')
			->make(true);
	}

}
