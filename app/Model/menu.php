<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'menu';

    protected $fillable = ['name','parent_id','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function posts(){
        return $this->belongsToMany('App\Model\menu_post','menu_post','menu_id','post_id');
    }
}
