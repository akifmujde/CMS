<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany('App\Model\post','user_id','id');
    }

    public function photos(){
        return $this->hasMany('App\Model\photos','user_id','id');
    }

    public function phlalbs(){
        return $this->hasMany('App\Model\photo_album','user_id','id');
    }

    public function albums(){
        return $this->hasMany('App\Model\album','user_id','id');
    }

    public function categories(){
        return $this->hasMany('App\Model\category','user_id','id');
    }

    public function m_posts(){
        return $this->hasMany('App\Model\menu_post','user_id','id');
    }

    public function menus(){
        return $this->hasMany('App\Model\menu','user_id','id');
    }

    public function role(){
        return $this->belongsTo('App\Model\role','role_id','id');
    }
}
