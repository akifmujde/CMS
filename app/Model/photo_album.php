<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class photo_album extends Model
{
    protected $table = 'photo_album';

    protected $fillable = ['photo_id','user_id','album_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function posts(){
        return $this->hasMany('App\Model\post','phtalb_id','id');
    }
}
