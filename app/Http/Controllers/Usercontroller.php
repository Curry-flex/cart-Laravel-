<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class Usercontroller extends Controller
{
   public function login(Request $request)
   {
     $user = User::where(['email'=>$request->email])->first();

      
     if(!$user)
     {
         return "incorrect";
     }
     else{
         $request->session()->put('user',$user);
         return redirect('/product');
     }
   }
}