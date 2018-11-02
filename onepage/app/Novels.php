<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;
class Novels extends Model
{
	protected $table = 'novels';
	protected $guarded = [];
	public function user() {
		return $this->belongsTo(User::class)->withDefault();
	}
	public function genre() {
		return $this->hasOne(Genre::class ,'id', 'genre_id')->withDefault();
	}

	 /*
     * 指定したタイプのジャンルだけを含むクエリのスコープ
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfGenre($query, ?string $genre_id)
    {
		$genre_id = isset($genre_id)?$genre_id:"1";
        if(!is_null($genre_id)){
			return $query->where('genre_id', $genre_id);
		}
    }

}

class Genre extends Model
{
	protected $table = 'genre';
	protected $guarded = array('id');
	
}
?>