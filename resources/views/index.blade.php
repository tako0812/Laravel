@extends('layouts.app') @section('content')
<div class="container">
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
                    @if($item->user->image_path!=null)
                    <img class="w-25 h-25 card-img-top rounded-circle"
                        src="/storage/user_img/{{$item->user->image_path}}" alt="Card image cap" />
                    @endif
                    {{$item->user->name}}</p>
                <p class="card-text">{{ $item->price}}円</p>
                <a href="{{ route('product.detail',['id'=>$item->id]) }}" class="btn btn-primary">詳細をみる</a>

            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection