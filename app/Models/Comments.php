<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model {

	protected $table = 'comments';
	protected $guarded = ['id'];

	public function posts() {
			return $this->hasOne(Post::class, 'post_id', 'id');
	}

	public function detailcomment() {
			return $this->hasMany(CommentsDetail::class, 'comment_id', 'id');
	}

}
