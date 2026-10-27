<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgetEmailController extends Controller
{
    public function emailConfirm($locale)
    {
        return view('front-client.send-email');
    }

    public function emailSend($locale,Request $request)
    {
        
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);
        $token = Str::random(65);
        DB::table('password_forgot')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mail::send('Emails.ForgetPass',['token'=>$token],function($message) use ($request){
            $message->to($request->email);
            $message->subject('بازیابی رمز عبور');
        });
        

        return to_route('index.sign-in')->with('success','ایمیل جهت رمز جدید ارسال شد');


    }

    public function passwordSet($locale,$token)
    {
        return view('front-client.forget-password-form',compact('token'));
    }

    public function passwordReset($locale,Request $request)
    {
        $data = $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed'
        ]);

        DB::table('password_forgot')->where('email',$data['email'])->where('token',$data['token'])->first();

        $user = User::where('email',$data['email'])->first();

        $user->update($data);
        $user->save();

        DB::table('password_forgot')->where('email',$data['email'])->where('token',$data['token'])->delete();

        return to_route('index.sign-in')->with('success',' رمز جدید شد');
          


    }
}
