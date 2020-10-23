<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password','self_introduction',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function task ()
    {
        return $this->hasOne('App\Task');
    }

    public function tasks ()
    {
        return $this->hasMany('App\Task');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function user_prifile ()
    {
        return $this->hasOne('App\User_Prifile');
    }

    public function product()
    {
         return $this->hasMay('App\Procut');
    }

    public function tweets(){
        return $this->hasMay('App\Tweet');
   }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function get_user()
    {
        $ret=$this->get();
        return $ret;
    }

    public function get_user_by_id($id)
    {
        $ret = $this->where('id', $id)->first();

        return $ret;
    }
}
