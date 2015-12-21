<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentsDetail extends Model {

	protected $table = 'comment_detail';
	protected $guarded = ['id_detail_comment'];

	public function comment() {
			return $this->hasOne(Comments::class, 'id', 'comment_id');
	}

}
