<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function index_admin()
    {
        return view('index_admin');
    }

    public function admin_dashboard()
    {
        return view('admin_dashboard');
    }
    public function user_register()
    {
        return view('user_registration');
    }
    public function user_reg(Request $request)
   {
     $request->validate([
     'name'=>'required',
     'email'=>'required',
     'place'=>'required',
     'contact'=>'required',
     'type'=>'required',
    ]);
    $data=$request->all();
    $data["password"]=bcrypt($data["password"]);
    User::create($data);
    
    return redirect()->route('user_register')->with('success',' User registered successfully');
  }

  public function userhome()
  {
      return view('userhome');
  }
 
  public function customer_register()
  {
      return view('customer_registration');
  }
  public function custom_reg(Request $request)
 {
   $request->validate([
   'name'=>'required',
   'email'=>'required',
   'place'=>'required',
   'contact'=>'required',
   'type'=>'required',
  ]);
  $data=$request->all();
  $data["password"]=bcrypt($data["password"]);
  User::create($data);
  
  return redirect()->route('customer_register')->with('success',' Customer registered successfully');
}

public function customer_home()
  {
      return view('customer_home');
  }
 
  public function adminview_products()
  {
    $product=Product::all();
    return view('adminview_products',compact('product'));
  }
}
