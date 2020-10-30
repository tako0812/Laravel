@extends('layouts.app')
@section('content')
{{--

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
</div>
@endif

You are logged in!
</div>
</div>
</div>
</div>
</div> --}}



<div class="container">
    <td><a href="{{ route('product.create') }}">新規作成</a></td>
    <td><a href="{{ route('login') }}">ログイン</a></td>
    @foreach ($list as $item)
    <div class="row justify-content-center">
        <div class="card col-md-6 m-2">
            @if($item->image_path!=null)
            <img class="card-img-top rounded" src="/storage/product_img/{{$item->image_path}}" alt="Card image cap" />
            @endif
            <div class="card-body">
                <h3 class="card-title">{{ $item->name }}</h3>
                <p class="card-text">{{ $item->self_introduction }}</p>
                <a href="{{ route('product.detail',['id'=>$item->id]) }}" class="btn btn-primary">詳細をみる</a>
            </div>
        </div>
    </div>

    @endforeach
</div>









@endsection
