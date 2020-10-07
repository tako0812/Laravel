@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-6 m-2">

            <a href="{{ route('product.index') }}">一覧に戻る</a>
            <h3>{{ $user->name }}</h3>
            @if($user->image_path!=null)
            <img class="card-img-top rounded" src="/storage/user_img/{{$user->image_path}}" alt="Card image cap" />
            @endif
            <a href="{{ route('user.config') }}">プロフィールを編集する</a>
            <p>自己紹介</p>
            <p>{{$user->self_introduction}}</p>
            <p>Email:</p>
            <p>{{$user->email}}</p>
            <p>商品管理</p>
            <p>商品の購入履歴</p>
            <p>メッセージ</p>
            <p>出品する</p>
            <p>ログアウト</p>
            @endsection
        </div>
    </div>
</div>