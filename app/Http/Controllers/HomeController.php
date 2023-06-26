<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\FoodChef;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index(){
        $data = food::all();
        $data1 = foodchef::all();
        $user_id=Auth::id();
        $count = cart::where('user_id',$user_id)->count();
        return view("home",compact("data","data1","count"));
    }

    public function redirects(){
        $data = food::all();
        $data1 = foodchef::all();
        $userType = Auth::user()->userType;
        if ($userType == 1) {
            return view('admin.adminhome');
        }else{
            $user_id=Auth::id();
            $count = cart::where('user_id',$user_id)->count();
            return view("home",compact("data","data1","count"));
        }
    }

    public function addcart(Request $request, $id){
        if (Auth::id()) {
            $user_id=Auth::id();
            $foodid = $id;
            $quantity=$request->quantity;
            $cart = new cart;
            $cart->user_id=$user_id;
            $cart->food_id=$foodid;
            $cart->quantity=$quantity;
            $cart->save();
            return redirect()->back();
        }else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id){
        $count=cart::where('user_id',$id)->count();
        $data = cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
        $data1 = cart::select('*')->where('user_id','=',$id)->get();
        return view('showcart',compact('count','data','data1')); 
    }

    public function remove($id){
        $data = cart::find($id);
        $data->delete();
        return redirect()->back();
    }
}
