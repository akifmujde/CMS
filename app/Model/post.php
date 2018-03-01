<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post';

    protected $fillable = ['title','content','show','user_id','phtalb_id','category_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function category(){
        return $this->belongsTo('App\Model\category','category_id','id');
    }

    public function phtalb(){
        return $this->belongsTo('App\Model\photo_album','phtalb_id','id');
    }

    public function menus(){
        return $this->belongsToMany('App\Model\menu_post','menu_post','post_id','menu_id');
    }
}
