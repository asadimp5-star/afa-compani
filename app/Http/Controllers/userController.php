<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

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
}
