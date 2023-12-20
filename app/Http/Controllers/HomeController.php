<?php

namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        $count = 1;
       $userType = Auth::User()->usertype;
       if($userType=='1')
       {
        return view('admin.home',compact('count'));
       }
       else{
        return view('home.Userpage',compact('count'));
       }
    }

    public function index(){
        $count =1;
        $products = Product::paginate(6);
        return view('home.Userpage',compact('products','count'));
    }

    public function product_details($id){
       $products = Product::find($id);
       return view('home.product_details',compact('products'));
    }
    public function add_cart($id){
       if(Auth::id())
       {
         $count = 1;

         return view('home.Userpage',compact('count'));

       }
       else{
        return redirect('login');
       }
    }
}
