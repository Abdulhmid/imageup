<?php

class GLobalHelpers {

	public static function url()
	{
		return explode('/', \Request::url());
	}

	public static function lastUrl()
	{
		return last(self::url());
	}

	public static function indexUrl()
	{
		return Request::segment(1);
	}

	public static function actionUrl()
	{
		return Request::segment(2);
	}

	public static function checkImage($pathImage, $user = true)
	{
		if (file_exists(public_path()."/".$pathImage) && !empty($pathImage))
		{
		 	return asset($pathImage);
		}
		else
		{
			if($user == true)
			  return asset("/images/noimage.png");
			else
				return asset("/images/noimage.png");
		}
	}

	public static function formatDate($date, $format = 'd M Y \a\t H:i')
	{
		return (!is_null($date)) ? (new DateTime($date))->format($format) : "-";
	}

 	public static function softTrim($text, $count, $wrapText='..'){

        if(strlen($text)>$count){
            preg_match('/^.{0,' . $count . '}(?:.*?)\b/siu', $text, $matches);
            $text = $matches[0];
        }else{
            $wrapText = '';
        }
        return $text . $wrapText;
    }

	public static function breadcrumb()
	{
		$bread = '';
		$last_segment = '';
		$path = explode("/", \Request::path());
		foreach ($path as $key => $value) {
			$last_segment .='/'.$value;
			$name = explode("-", $value);

			if($key+1 == count($path)) :
				$bread .= '<li class="active"><b>';
				foreach ( $name as $n ){
					$bread .= ucfirst($n)."&nbsp;";
				}
				$bread .= '</b></li>';
			else:
				$bread .= '<li ><a  href="'.url($last_segment).'" ><b>';
				foreach ( $name as $n ){
					$bread .= ucfirst($n)."&nbsp;";
				}
				$bread .='</b></a></li>';
			endif;
		}
		return $bread;
	}

	public static  function messages($msg = "", $error = false)
	{
		$type = ($error == false ? 'success' : 'danger');
		return '<div class="no-print autohide alert alert-dismissable full-alert">
					<div class="callout callout-'.$type.'">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				    	<h4><i class="fa fa-info"></i> '. $msg .'</h4>
					</div>
				  </div>';
	}

	public static function idrFormat($number, $prefix = 0)
	{
		return !is_null($number) ? "Rp".number_format($number, $prefix, ",", ".") : "-";
	}

	public static function encrypt($sData)
	{
		$id = (double)$sData*432.234;
		return strtr(rtrim(base64_encode($id), '='), '+/', '-_');
	}

	public static function decrypt($sData)
	{
		$url = base64_decode(strtr($sData, '-_', '+/'));
		$id = (double) $url/432.234;
		return intval($id);
	}

	public static function toRp($data){
		$angka	= $data;
		$tdec  	= "0";
		$pdec	= ",";
		$prib	= ".";

		$result = "Rp. ".number_format($angka,$tdec,$pdec, $prib);
		return $result;
	}

}
