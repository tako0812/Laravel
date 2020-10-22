<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = [ 
        'recieve','send', 'tweet',
    ];

    
    public function get_tweet_by_id($id,$auth_id)
    {    
        $tweet =  $this->where(function($tweet) use ($auth_id) {
            $tweet->orWhere('send', '=', $auth_id)
                  ->orWhere('recieve', '=', $auth_id);
        })->where(function($tweet) use ($id) {
            $tweet->orWhere('send', '=', $id)
                  ->orWhere('recieve', '=', $id);
        })->get();


        return $tweet;
    }
    public function get_tweetLIST_by_id($auth_id)
    {    
        $tweet =  $this->where(function($tweet) use ($auth_id) {
            $tweet->orWhere('send', '=', $auth_id)
                  ->orWhere('recieve', '=', $auth_id);
        })->get();
 
        // $send = $tweet->unique('send');
        
        // $recieve = $tweet->unique('recieve');

        // $tweet=concat($send,$recieve);
      
        return $tweet;
    }

}
