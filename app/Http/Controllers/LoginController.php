<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login()
    {
      return view('admin_login');  
    } 
    public function admin_login(Request $request)
    {
      $credentials=$request->only('email','password');
        if(Auth::attempt($credentials))
        {
        $request->session()->regenerate();
        return redirect()->route('admin_dashboard');
        }
        return back()->withErrors([
            'email'=>'the provided credentials do not match',
        ]);
    }
    public function user_login()
    {
      return view('user_login');  
    } 
    public function showuser_login(Request $request)
    {
      $credentials=$request->only('email','password');
        if(Auth::attempt($credentials))
        {
        $request->session()->regenerate();
        return redirect()->route('userhome');
        }
        return back()->withErrors([
            'email'=>'the provided credentials do not match',
        ]);
    } 
    public function customer_login()
    {
      return view('customer_login');  
    } 
    public function cust_login(Request $request)
    {
      $credentials=$request->only('email','password');
        if(Auth::attempt($credentials))
        {
        $request->session()->regenerate();
        return redirect()->route('customer_home');
        }
        return back()->withErrors([
            'email'=>'the provided credentials do not match',
        ]);
    } 
}
