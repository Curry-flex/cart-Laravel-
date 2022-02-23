<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductController extends Controller
{
 public function product()
 {
     $product= Product::all();
     return view('ecommerce.product',['product'=>$product]);
 }

 public function add(Request $request)
 {
     $image =time(). '-'.$request->name.'.'. $request->image->extension();
     $request->image->move(public_path('images'),$image);

     $product=Product::create([
        'name' =>$request->input('name'),
        'category' =>$request->input('category'),
        'price' =>$request->input('price'),
        'description' =>$request->input('description'),
        'gallery' =>$image
     ]);

     return redirect('/showadd');

 }

 public function showadd()
 {
        return view('ecommerce.addProduct');
 }

 public function detail($id){
     return view('ecommerce.detail',['detail'=>Product::findorFail($id)]);
 }
 public function addTocart(Request $request)
 {
     if($request->session()->has('user'))
     {
        $cart = new Cart;
        $cart->user_id=$request->session()->get('user')['id'];
        $cart->product_id =$request->product_id;
        $cart->save();

        return redirect('/product');
     }
     else{
         return redirect('/');
     }
     
 }
 static function cartItem(){
      $user = Session::get('user')['id'];
      return Cart::where('user_id',$user)->count();
 }

 public function login(Request $request)
 {
       $user =  $request->only('username' ,'password');
       if(Auth::attempt($user)){
           return "success";
       }
       else{
           return "fail";
       }
 }
}
