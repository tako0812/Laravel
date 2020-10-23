<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Review;

class ReviewController extends Controller
{
    public function __construct()
    {

    }

    public function create(Product $product)
    {
        return view('review.create', compact('product'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->id();

        $review = new Review;
        $review->fill($data);
        $review->save();

        return redirect(route('product.index'))->with('success', 'レビューを投稿しました。');
    }
}
