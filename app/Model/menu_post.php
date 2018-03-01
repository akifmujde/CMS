<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class menu_post extends Model
{
    protected $table = 'menu_post';

    protected $fillable = ['menu_id','post_id','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
