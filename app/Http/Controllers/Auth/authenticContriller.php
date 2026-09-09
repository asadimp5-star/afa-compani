<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authenticContriller extends Controller
{
    public function loging()
    {
        return view('front-client.login');
    }
    public function getIn(Request $request )
    {
      
        if(Auth::attempt($request->validate([
            'email'=> 'required|email|exists:users,email',
            'password'=>'required|min:8'
        ]))){
            $request->session()->regenerate();
            if(Auth::user()->role == 1){
              
                return to_route('/admin');
            }else{
                if(Auth::User()->status == 1){
                  return to_route('admin.users.user-dashboard');  
                }else{

                    Auth::logout();

                    return to_route('index.cuntactUs')->with('successe','بنابر صلاح دید مدیر فعلا امکان ورود برای شما میسر نیست،لذا جهت اطلاع بیشتر تماس بگیرید');                
                    
                }
                
            }
            
        }
        return back()->withErrors([
            'email'=>'ایمیل یا گذرواژه اشتباه است'
        ]);

    }
    public function logOute(Request $request)
    {
        
         Auth::logout();
 
    return to_route('index.home');
    }
}
