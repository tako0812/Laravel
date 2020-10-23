<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskPost; // <- これを追加
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{


    public function edit($id)
    {
        $product = new Product;
        $product_data = $product->get_product_by_id($id);

        return view('edit', [
            'product' => $product_data,
        ]);
    }
    public function index ()
    {
        $product = new Product;
        $list = $product->get_product();

        return view('index', [
                'list'  => $list
        ]);
    }


    public function show($id)
    {
        $products = new Product;
        $product_data = $products->get_product_by_id($id);
        $user = Product::first()->user;
         return view('detail', [
            'product' => $product_data,
            'user'=>$user,

        ]);


    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {

        $input = $request->all();
        unset($input['_token']);
        // 追加：ログインしているユーザーのIDをuser_idに設定
        // $input['user_id'] = Auth::id();
        // 追加：データベースへの登録
        $product = new Product;
        // $product->fill($input);
        $product ->detail=$request->detail;
        $product ->title=$request->title;
        $product ->price=$request->price;
        $product ->sub_title=$request->sub_title;
        $product->user_id=Auth::id();
        $path = $request->file('image')->store('public/product_img');
        $product->image_path = basename($path);
        $product->save();
        // $user_prifiles=new User_Prifile;
        // $user_prifiles->fill($input);
        // $user_prifiles->save();

        return redirect(route('product.index'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        unset($input['_token']);
        $products = new Product;
        $products = $products->find($id);
        $products->fill($input);
        $products->save();

        return redirect(route('product.index'));
    }
    public function delete(Request $request)
    {
        Product::destroy($request->id);

        return redirect(route('product.index'));
    }
}
