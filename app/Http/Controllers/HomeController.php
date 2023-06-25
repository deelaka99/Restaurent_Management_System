<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\FoodChef;

class HomeController extends Controller
{
    public function index(){
        $data = food::all();
        $data1 = foodchef::all();
        return view("home",compact("data","data1"));
    }

    public function redirects(){
        $data = food::all();
        $data1 = foodchef::all();
        $userType = Auth::user()->userType;
        if ($userType == 1) {
            return view('admin.adminhome');
        }else{
            return view("home",compact("data","data1"));
        }
    }

    public function addcart(){
        if (Auth::id()) {
            $user_id=Auth::id();
            dd($user_id);
            return redirect()->back();
        }else {
            return redirect('/login');
        }
    }
}
