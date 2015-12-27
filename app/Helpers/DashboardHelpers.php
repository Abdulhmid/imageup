<?php

class DashboardHelpers {

	public static function filter($month = '', $year = '',$type=""){

		$list=array();
		$month = $month;
		$year = $year;

		for($d=1; $d<=31; $d++)
		{
		    $time=mktime(12, 0, 0, $month, $d, $year);          
		    if (date('m', $time)==$month)       
		        $list[]= (($type == "1") ? date('d', $time) : date('d M Y', $time)) ;
		}

		return $list;

	}

	public static function getPostCount($date = ""){
		$data = App\Models\Posts::where(\DB::raw('date(created_at)') ,$date)->count();
		return (int)$data;
	}

}