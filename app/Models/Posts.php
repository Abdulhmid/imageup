<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model {

	protected $table = 'posts';
	protected $guarded = ['id'];

	public function comments() {
			return $this->hasMany(Comments::class, 'post_id', 'id');
	}

}
