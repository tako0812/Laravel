<?php

namespace App\Http\Controllers;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function user(){
        $user=new User;
        $user= $user->get_user();

        return view('home', [
            'list'  => $user
    ]);

    }
    public function user_mypage () 
    {
        $user = new User;
        $user = $user->get_user_by_id(Auth::id());
        return view('mypage', [
                'user'  => $user
        ]);
    }
    public function user_buy(){

    }
    public function user_post(){
        $user = new User;
        $user = $user->get_user_by_id(Auth::id());
        $product = new Product;
        $product = $product->get_product_by_id(Auth::id());

        return view('user_post', [
            'user'  => $user,
            'products'=>$product
    ]);
    }
    public function user_config(){
        $user = new User;
        $user = $user->get_user_by_id(Auth::id());
        return view('userconfig',[
        'user'=>$user
        ]);

    }
    public function user_update(Request $request){
        $user = new User;        
        $user = $user->find(Auth::id());
        $user->name  = $request->name;
        $user->email =$request->email;
         $user->self_introduction=$request->self_introduction;
        if($request->file('user_image') != null){
            $path=$request->file('user_image')->store('public/user_img');
            $user->image_path = basename($path);
        }
        $user->save();
        return redirect(route('user.mypage'));
    }

}
