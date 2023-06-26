<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\FoodChef;
use App\Models\Order;

class AdminController extends Controller
{
    public function home(){
        if (Auth::id()) {
            $data = user::all();
            $userCount = user::where('userType', '0')->count();
            $adminCount = user::where('userType', '1')->count();
            $chefCount = foodchef::select('name')->count();
            $foodCount = food::select('name')->count();
            $orderCount = order::select('id')->count();
            $reservationCount = reservation::select('id')->count();
            return view("admin.adminhome", compact("data","userCount","adminCount","chefCount","foodCount","orderCount","reservationCount"));
        }else {
            return redirect('login');
        }
    }

    public function users(){
        if (Auth::id()) {
            $data = user::all();
            return view("admin.user", compact("data"));
        }else {
            return redirect('login');
        }
    }

    public function deleteuser($id){
        if (Auth::id()) {
            $data = user::find($id);
            $data->delete();
            return redirect()->back();
        }else {
            return redirect('login');
        }
    }

    public function deletemenu($id){
        if (Auth::id()) {
            $data = food::find($id);
            $data->delete();
            return redirect()->back();
        }else {
            return redirect('login');
        }
    }

    public function foodmenu(){
        if (Auth::id()) {
            $data = food::all();
            return view("admin.foodmenu", compact("data"));
        }else {
            return redirect('login');
        }
    }

    public function updateview($id){
        if (Auth::id()) {
            $data = food::find($id);
            return view("admin.updateview", compact("data"));
        }else {
            return redirect('login');
        }
    }

    public function update(Request $request, $id){
        if (Auth::id()) {
            $data = food::find($id);
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imagename);
            $data->image = $imagename;
            $data->title = $request->title;
            $data->price = $request->price;
            $data->description = $request->description;
            $data->save();
            return redirect()->back();
        }else {
            return redirect('login');
        }
    }

    public function upload(Request $request){
        if (Auth::id()) {
            $data = new food;
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imagename);
            $data->image = $imagename;
            $data->title = $request->title;
            $data->price = $request->price;
            $data->description = $request->description;
            $data->save();
            return redirect()->back();
        }else {
            return redirect('login');
        }
    }

    public function reservation(Request $request){
        if (Auth::id()) {
            $data = new reservation;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->guest = $request->guest;
            $data->date = $request->date;
            $data->time = $request->time;
            $data->message = $request->message;
            $data->save();
            return redirect()->back();
        }else {
            return redirect('login');
        }
    }

    public function viewreservation(){
        if (Auth::id()) {
            $data = reservation::all();
            return view("admin.adminreservation",compact("data"));
        }else {
            return redirect('login');
        }
    }

    public function viewchef(){
        if (Auth::id()) {
            $data = foodchef::all();
            return view("admin.adminchef",compact("data"));
        }else {
            return redirect('login');
        }
    }

    public function uploadchef(Request $request){
        if (Auth::id()) {
            $data = new foodchef;
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('chefimage',$imagename);
            $data->image = $imagename;
            $data->name = $request->name;
            $data->speciality = $request->speciality;
            $data->save();
            return redirect()->back();
        }else {
            return redirect('login');
        }
    }

    public function updatechef($id){
        if (Auth::id()) {
            $data = foodchef::find($id);
            return view("admin.updatechef", compact("data"));
        }else {
            return redirect('login');
        }
    }

    public function updatefoodchef(Request $request, $id){
        if (Auth::id()) {
            $data = foodchef::find($id);
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('chefimage',$imagename);
            $data->image = $imagename;
            $data->name = $request->name;
            $data->speciality = $request->speciality;
            $data->save();
            return redirect()->back();
        }else {
            return redirect('login');
        }
    }

    public function deletechef($id){
        if (Auth::id()) {
            $data = foodchef::find($id);
            $data->delete();
            return redirect()->back();
        }else {
            return redirect('login');
        }
    }

    public function orders(){
        if (Auth::id()) {
            $data = order::all();
            return view('admin.orders',compact('data'));
        }else {
            return redirect('login');
        }
    }

    public function search(Request $request){
        if (Auth::id()) {
            $search = $request->search;
            $data= order::where('name','Like','%'.$search.'%')->orWhere('foodname','Like','%'.$search.'%')->orWhere('phone','Like','%'.$search.'%')->get();
            return view('admin.orders',compact('data'));
        }else {
            return redirect('login');
        }
    }
}
