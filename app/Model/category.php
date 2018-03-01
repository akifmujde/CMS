<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';

    protected $fillable = ['title','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function posts(){
        return $this->hasMany('App\Model\post','category_id','id');
    }
}
