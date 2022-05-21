<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use App\Models\User;
use App\Models\Corporate;

class TestController extends Controller
{
    public function test(){
        return view('test');
    }


// user auth 

    public function user_dashboard(){
        return view('test.user_dashboard');
    }
    public function user_login(){
        return view('test.user_login');
    }
    public function user_loginAction(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('user/dashboard');
        }
    }
    public function user_logout(){
        Auth::guard('web')->logout();
        return redirect()->route('user.dashboard');
    }





    // admin auth 

    public function admin_dashboard(){
        return view('test.admin_dashboard');
    }
    public function admin_login(){
        return view('test.admin_login');
    }
    public function admin_loginAction(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
            return redirect('admin/dashboard');
        }
    }
    public function admin_logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.dashboard');
    }




    // corporate auth 

    public function corporate_dashboard(){
        return view('test.corporate_dashboard');
    }
    public function corporate_login(){
        return view('test.corporate_login');
    }
    public function corporate_loginAction(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        
        if (Auth::guard('corporate')->attempt(['email' => $email, 'password' => $password])) {
            return redirect('corporate/dashboard');
        }
    }
    public function corporate_logout(){
        Auth::guard('corporate')->logout();
        return redirect()->route('corporate.dashboard');
    }

    

    






}
