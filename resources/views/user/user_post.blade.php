@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-6 m-2">

            <a href="{{ route('product.index') }}">一覧に戻る</a>
            <h3>{{ $user->name }}</h3>
            @foreach($products as $product)
            <h3>{{$product->title}}</h3>
            @endforeach
            <p>自己紹介</p>
            <p>商品管理</p>
            <p>商品の購入履歴</p>
            <p>メッセージ</p>
            <p>出品する</p>
            <p>ログアウト</p>
            @endsection
        </div>
    </div>
</div>