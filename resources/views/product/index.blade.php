@extends('layouts.app') @section('content')
<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @foreach ($list as $item)
    <div class="row justify-content-center">
        <div class="card col-md-6 m-2">
            <div class="card-body">
                <a class="card-title" href="{{ route('product.detail',['id'=>$item->id]) }}">{{ $item->title }}</a>
                </br>
                <a class="card-text" href="{{ route('product.detail',['id'=>$item->id]) }}">{{ $item->sub_title }}</a>

                @if($item->image_path!=null)
                <a href="{{ route('product.detail',['id'=>$item->id]) }}">
                    <img class="card-img-top rounded" src="/storage/product_img/{{$item->image_path}}"
                        alt="Card image cap" />
                </a>
                @endif

                <p class="card-text">
                    @if(isset($item->user->image_path)!=null)
                    <img class="w-25 h-25 card-img-top rounded-circle"
                        src="/storage/user_img/{{$item->user->image_path}}" alt="Card image cap" />
                    @endif
                </p>


                {{--  //ユーザーの名前があれば表示する  --}}
                @if(isset($item->user->name))
                    <p>{{$item->user->name}}</p>
                @endif    

                <p class="card-text">{{ $item->price}}円</p>
                <a href="{{ route('product.detail',['id'=>$item->id]) }}" class="btn btn-primary">詳細をみる</a>

                @if ($item->is_purchased)
                    <div>
                        <a href="{{ route('review.create', ['product'=>$item->id]) }}">この商品のレビューを書く</a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection
