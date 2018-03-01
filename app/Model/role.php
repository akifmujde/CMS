<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = 'role';

    protected $fillable = ['role'];

    public function users(){
        return $this->hasMany('App\User','role_id','id');
    }
}
