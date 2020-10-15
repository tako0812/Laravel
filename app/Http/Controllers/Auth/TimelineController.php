<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Tweet;

class TimelineController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
    public function showTimelinePage($id)
    {       
        $tweets = new Tweet;
        $auth_id=Auth::user()->id;
        $tweets = $tweets->get_tweet_by_id($id,$auth_id);
        return view('auth.timeline', [
            'tweets' => $tweets,
        ]);   // <--- 変更
    }

    public function postTweet(Request $request) //ここはあとで実装します。(Requestはpostリクエストを取得するためのものです。)
    {

        
        $validator = $request->validate([ // これだけでバリデーションできるLaravelすごい！
            'tweet' => ['required', 'string', 'max:280'], // 必須・文字であること・280文字まで（ツイッターに合わせた）というバリデーションをします（ビューでも軽く説明します。）
        ]);
        Tweet::create([ // tweetテーブルに入れるよーっていう合図
            'user_id' => Auth::user()->id, // Auth::user()は、現在ログインしている人（つまりツイートしたユーザー）
            'tweet' => $request->tweet, // ツイート内容
        ]);
        return back(); // リクエスト送ったページに戻る（つまり、/timelineにリダイレクトする）

    }
}
