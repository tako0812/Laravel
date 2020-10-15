<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = [ 
        'user_id', 'tweet',
    ];

    
    public function get_tweet_by_id($id,$auth_id)
    {    
        $tweet=$this->where('user_id', $id)->orwhere('user_id', $auth_id)->get();
        return $tweet;
    }
}
