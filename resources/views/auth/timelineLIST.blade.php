@extends('layouts.app')
@section('content')
<div class="wrapper" style="margin: 0 auto; width: 100%; height: 100%; background-color: white;">
    

    <div class="tweet-wrapper">
        <!-- この辺追加 -->
        @foreach($tweets as $tweet)
            @if($tweet->send===Auth::id())
            <div style="text-align:right; padding:2rem; border-top: solid 1px #E6ECF0; border-bottom: solid 1px #E6ECF0;">
            送信元{{$tweet->send }}
            送信先{{$tweet->recieve }}
            </div>
            @elseif($tweet->recieve===Auth::id())
      
        <div style="text-align:left;padding:2rem; border-top: solid 1px #E6ECF0; border-bottom: solid 1px #E6ECF0;">
            送信元<div>{{$tweet->send }}</div>
            送信先{{$tweet->recieve }}
        </div>
        @endif
        @endforeach
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

@endsection