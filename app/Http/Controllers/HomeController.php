<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\FoodChef;
use App\Models\Reservation;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function index(){
        if (Auth::id()) {
            return redirect('redirects');
        }else{
            $data = food::all();
            $data1 = foodchef::all();
            $user_id=Auth::id();
            return view("home",compact("data","data1"));
        }
    }

    public function redirects(){
        $data = food::all();
        $data1 = foodchef::all();
        $userType = Auth::user()->userType;
        $userCount = user::where('userType', '0')->count();
        $adminCount = user::where('userType', '1')->count();
        $chefCount = foodchef::select('name')->count();
        $foodCount = food::select('name')->count();
        $orderCount = order::select('id')->count();
        $reservationCount = reservation::select('id')->count();
        if ($userType == 1) {
            return view("admin.adminhome", compact("data","userCount","adminCount","chefCount","foodCount","orderCount","reservationCount"));
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
        if (Auth::id()==$id) {
            $count=cart::where('user_id',$id)->count();
            $data = cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
            $data1 = cart::select('*')->where('user_id','=',$id)->get();
            return view('showcart',compact('count','data','data1'));
        } else {
            return redirect()->back();
        }
    }

    public function remove($id){
        if(Auth::id()==$id){
            $data = cart::find($id);
            $data->delete();
            return redirect()->back();
        }else {
            return redirect()->back();
        }
    }

    public function orderconfirm(Request $request){
        foreach($request->foodname as $key=>$foodname){
            $data = new order;
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->save();
        }
        return redirect()->back();
    }
}
