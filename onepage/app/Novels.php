<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novels extends Model
{
	protected $table = 'novels';
	protected $guarded = array('id');
	public function user() {
		return $this->belongsTo(User::class)->withDefault();
	}
}

class Genre extends Model
{
	protected $table = 'genre';
	protected $guarded = array('id');
	
}
?>