<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;

class HomeController extends Controller
{
    public function index(){
        $data = food::all();
        return view("home",compact("data"));
    }

    public function redirects(){
        $data = food::all();
        $userType = Auth::user()->userType;
        if ($userType == 1) {
            return view('admin.adminhome');
        }else{
            return view('home',compact('data'));
        }
    }
}
