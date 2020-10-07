@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __("プロフィール編集") }}</div>
                <div class="card-body">
                    <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">ユーザー名</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="name" value="{{ $user->name }}"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">メールアドレス</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="email" value="{{ $user->email }}"
                                    placeholder="" />
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">自己紹介</label>
                            <div class="col-md-6">
                                <textarea class="form-control"
                                    name="self_introduction">{{ $user->self_introduction }}</textarea><br />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">アイコン</label>
                            <div class="col-md-6">
                                <input type="file" name="user_image" />
                            </div>
                        </div>@csrf
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input class="btn btn-primary" type="submit" value="保存する" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection