@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-6 m-2">
            <a href="{{ route('product.index') }}">一覧に戻る</a>
            <h3>{{ $user->name }}</h3>
            @if($user->image_path!=null)
                <img class="card-img-top rounded" src="/storage/user_img/{{$user->image_path}}" alt="Card image cap" />
            @endif

            <p>自己紹介</p>
            <p>{{$user->self_introduction}}</p>
        </div>

        @if (!$user->reviews->isEmpty())
        <div class="card col-md-6 m-2 p-3">
            <p>感想・評価</p>
            @foreach ($user->reviews as $review)
                <div class="d-flex flex-row">
                    <div class="m-2" style="width: 2rem">
                        <img class="card-img-top rounded-circle"
                        src="{{ $review->user->image_path ? asset('/strage/user_img/'.$review->user->image_path) : 'http://placehold.jp/24/cc9999/993333/150x100.png' }}/storage/user_img/" alt="Card image cap" />
                    </div>
                    <div class="m-2 flex-grow-1">
                        <div class="font-weight-bold">
                            {{ $review->product->title }}
                        </div>
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
