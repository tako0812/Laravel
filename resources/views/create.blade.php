@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("新規商品登録") }}</div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">サービスタイトル(25文字以内)※必須</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="title" value="" placeholder="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">タイトル補足説明(15字～30字)※必須</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="sub_title" value="" placeholder="" />
                            </div>
                        </div>

                        {{--  <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"
                                >募集期限</label
                            >
                            <div class="col-md-6">
                                <input
                                    class="form-control"
                                    type="date"
                                    name="deadline"
                                    value=""
                                    placeholder=""
                                />
                            </div>
                        </div>  --}}

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">商品の詳細※必須</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="detail"></textarea><br />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">サービスの価格</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="price" value="" placeholder="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">商品写真</label>
                            <div class="col-md-6">
                                <input type="file" name="image" />
                                <input type="hidden" name="_token" value="tyKtcrH2KscjxVAsxb3KHXG5ppZ8te6PA6SJY8df" />
                            </div>
                        </div>@csrf



                        プランを作成する
                        {{--  
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"
                                >プラン名</label
                            >
                            <div class="col-md-6">
                                <input
                                    class="form-control"
                                    type="text"
                                    name="name"
                                    value=""
                                    placeholder=""
                                />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"
                                >タイトル補足説明(15字～30字)※必須</label
                            >
                            <div class="col-md-6">
                                <input
                                    class="form-control"
                                    type="text"
                                    name="name"
                                    value=""
                                    placeholder=""
                                />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"
                                >タイトル補足説明(15字～30字)※必須</label
                            >
                            <div class="col-md-6">
                                <input
                                    class="form-control"
                                    type="text"
                                    name="name"
                                    value=""
                                    placeholder=""
                                />
                            </div>
                        </div> 
                                          --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input class="btn btn-primary" type="submit" value="登録" />
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection