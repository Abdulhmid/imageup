<?php
namespace App\Additionals\Datatables;

use Datatables;

class PostingDatatable {

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
			->select('id','article','created_by','created_at');

	}

	public function make()
	{
		return \Datatables::of($this->data)
			->addColumn('action','
				<a href="{!! url(GLobalHelpers::indexUrl().\'/edit/\'.$id) !!}"
					class="btn btn-flat btn-default btn-sm" data-toggle="tooltip" data-original-title="Edit">
					<i class="fa fa-pencil"></i> Edit
				</a>
				<a href="{!! url(GLobalHelpers::indexUrl().\'/delete/\'.$id) !!}"
					class="btn btn-flat btn-danger btn-sm btn-delete"
					data-toggle="tooltip" data-original-title="Delete" onclick="swal_alert(this); return false;">
					<i class="fa fa-trash-o"></i> Delete
				</a>
				')
			->editColumn('created_at','{!! GlobalHelpers::formatDate($created_at) !!}')
			->removeColumn('id')
			->make(true);
	}
}
