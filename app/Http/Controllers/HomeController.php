<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Cart;
use App\Models\User;

class HomeController extends Controller{
    public function index() {
        $data=food::all();
        $data2=foodchef::all();
        $user = User::all();
        return view("home",compact("data","data2","user"));
    }

    public function redireacts(){
        $data=food::all();
        $data2=foodchef::all();
         $usertype = Auth::user()->usertype;

         if($usertype == '1'){
           return view('admin.adminhome');
         }
         else{

        $user_id=Auth::id();

        $count=Cart::where('user_id',$user_id)->count();


             return view('home',compact('data','data2','count'));
         }
    }



    //   cart function

    public function addcart(Request $request,$id){

        if(Auth::id()){

          $user_id = Auth::id();

          $food_id=$id;
          $quantity=$request->quantity;

          $cart = new Cart;

          $cart->user_id=$user_id;
          $cart->food_id=$food_id;
          $cart->quantity=$quantity;


          $cart->save();
          return redirect()->back();
        }
        else{
          return redirect('/login');
        }

    }
}
