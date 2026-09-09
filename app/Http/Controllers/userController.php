<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateEmailRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\userRequest;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderByDesc('id')->paginate(3);
        return view('admin.members.members-list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.members.add-member');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(userRequest $request)
    {
        
        $data = $request->validated();
        $data['role']= 0;
        
        User::create($data);
        return redirect()->route('admin.users.user')->with('success','عضو جدید با موفقیت افزوده شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {


        return view('admin.members.show-member',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $pos)
    {
        return view('admin.members.observe',compact('pos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        $user->delete();
        return redirect()->route('admin.users.user')->with('success','حذف با موفقیت انجام شد');
        
    }

    public function status(user $user)
    {
        $user->status = ($user->status == 1 ? 0 : 1);
        $user->save();
        return redirect()->route('admin.users.user')->with('success','تغییر وضعیت با موفقیت انجام شد');

    }
    public function showUser()
    {
        if(Auth::check())
        {
            $posts = post::where('user_Id',Auth::id())->orderByDesc('id')->paginate(3);
        }
         
        return view('admin.members.single-member.members',compact('posts'));
    }
    public function aouth()
    {
        return view('admin.members.single-member.add-poste');
    }
    public function memberProfile()
    {
        return view('admin.members.single-member.member-profile');
    }
    public function showUserPass(User $user)
    {
        return view('admin.admin-profile.cheng-pass',compact('user'));
    }
    public function memberPass(User $user)
    {
        return view('admin.members.single-member.cheng-pass',compact('user'));
    }
    public function userPass(UpdatePasswordRequest $request, User $user)
    {
       
        $data = $request->validated();
        
        $user->update($data);
        Auth::logout();
        return to_route('index.cuntactUs')->with('successe','رمز با موفقیت تغییر کرد');

    }
    public function useremail(User $user)
    {
        return view('admin.admin-profile.chenge-email',compact('user'));
    }
    public function UserEmailCheng(UpdateEmailRequest $request , User $user)
    {
        $data = $request->validated();
        
        $user ->update($data);
        $user->save($data);
        
        Auth::logout();
        return to_route('index.cuntactUs')->with('successe','آدرس ایمیل با موفقیت تغییر کرد');


    }
    public function memberEmail(User $user)
    {
        return view('admin.members.chenge-email',compact('user'));
    }
    public function memberEmailCheng(UpdateEmailRequest $request , User $user)
    {
        $data = $request->validated();
        $user ->update($data);
        $user->save($data);
        return to_route('admin.users.user')->with('success','آدرس ایمیل با موفقیت تغییر کرد');


    }

}
