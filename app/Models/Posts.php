<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model {

	protected $table = 'posts';
	protected $guarded = ['id'];

	public function detail() {
			return $this->hasMany(PostDetail::class, 'post_id', 'id');
	}

	public function comments() {
			return $this->hasMany(
					Comments::class,
					'post_id',
					'id')->with('detailcomment');
	}

	public function scopePosting()
	{
	  	return $this->with(['detail','comments'])->select('*')->orderBy('id', 'desc')->get();
	}

}
