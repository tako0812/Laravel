@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("レビュー投稿") }}</div>
                <div class="card-body">
                    <form action="{{ route('review.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div>
                            <p>
                                <span class="font-weight-bold">{{ $product->title }}</span><br>
                                <small>{{ $product->sub_title }}</small>
                            </p>
                        </div>

                        <div class="form-group">
                            <label>
                                <select name="rating" class="form-control w-100" required>
                                    <option value="1" selected>★</option>
                                    <option value="2">★★</option>
                                    <option value="3">★★★</option>
                                    <option value="4">★★★★</option>
                                    <option value="5">★★★★★</option>
                                </select>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>レビューコメント</label>
                            <div>
                                <textarea class="form-control w-100" name="comment" rows="10" maxlength="1000" required>{{ old('comment') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-primary" type="submit">レビューを投稿</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
