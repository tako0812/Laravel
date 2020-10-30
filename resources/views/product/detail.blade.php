@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-6 m-2">
            <h3>タイトル{{$product->title}}</h3>
            <h3>サブタイトル{{$product->sub_title}}</h3>
            @if($product->image_path!=null)
            <img class="card-img-top rounded" src="/storage/product_img/{{$product->image_path}}"
                alt="Card image cap" />
            @endif
            <p>価格{{ $product->price }}</p>
            <p>詳細{{ $product->detail }}</p>
            <a href="{{ route('product.index') }}">一覧に戻る</a>
            <p>先生に教えてほしいことを相談してみよう！</p>
            <a href="#" class="btn btn-primary">メッセージで相談してみる</a>

        </div>

        <div class="card col-md-6 m-2">
            プロフィール
            @if($product->user->image_path!=null)
            <img class="w-25 h-25 card-img-top rounded-circle" src="/storage/user_img/{{$product->user->image_path}}"
                alt="Card image cap" />
            @endif
            {{$product->user->name}}
            <a href="#" class="btn btn-primary">メッセージで相談</a>
            まずは相談してみよう
        </div>

        @if (!$product->reviews->isEmpty())
        <div class="card col-md-6 m-2 p-3">
            <p>感想・評価</p>
            @foreach ($product->reviews as $review)
            <div class="d-flex flex-row">
                <div class="m-2" style="width: 2rem">
                    <img class="card-img-top rounded-circle"
                        src="{{ $review->user->image_path ? asset('/strage/user_img/'.$review->user->image_path) : 'http://placehold.jp/24/cc9999/993333/150x100.png' }}/storage/user_img/"
                        alt="Card image cap" />
                </div>
                <div class="m-2 flex-grow-1">
                    <div class="rating-star" style="color: #FBC02D">
                        @for ($i = 1; $i < $review->rating; $i++)
                            ★
                            @endfor
                    </div>
                    <div>
                        by {{ $review->user->name }}
                    </div>
                    <div>
                        {!! nl2br($review->comment) !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection