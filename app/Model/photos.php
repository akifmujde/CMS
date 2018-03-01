<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    protected $table = 'photos';

    protected $fillable = ['title','user_id'];

    public function user(){
        $this->belongsTo('App\User','user_id','id');
    }
    public function albums(){
        $this->belongsToMany('App\Model\photo_album');
    }
}
