<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\message;
use Illuminate\Http\Request;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(message $item)
    {
        $messages = message::find($item);
        return view('admin.message-show',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(message $item)
    {
        $item->delete();
        
        return redirect()->route('/admin')->with('success','پیام با موفقیت حذف شد');
    }
}
