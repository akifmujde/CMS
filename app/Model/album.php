<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $table = 'album';

    protected $fillable = ['title','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function photos(){
        return $this->belongsToMany('App\Model\photo_album');
    }
}
