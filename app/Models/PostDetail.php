<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostDetail extends Model {

	protected $table = 'post_detail';
	protected $guarded = ['id_detail_post'];

	public function posts() {
			return $this->hasOne(Post::class, 'post_id', 'id');
	}

}
