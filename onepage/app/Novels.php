<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novels extends Model
{
    /**
      * モデルと関連しているテーブル
      *
      * @var string
      */
     protected $table = 'novels';
     protected $guarded = array('id');
}
