<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\comment;
use Illuminate\Http\Request;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function edit(comment $comment)
    {
        $show =comment::find($comment);
       
        return view('admin.reply-comment',compact('show'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $item)
    {
        $validated = $request->validate([
        'reply' => 'nullable|string|max:255',
    ]);
        $item->update($validated);
        
        return redirect()->route('/admin')->with('success', 'پاسخ با موفقیت ثبت شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comment $comment)
    {
        $comment->delete();
        
        return redirect()->route('/admin')->with('success', 'نظر با موفقیت حذف شد');

    }
    public function status(comment $comment){
        $comment->status = $comment->status == 1 ? 0 : 1;
        $comment->save();
        return redirect()->route('/admin')->with('success', 'تغییر وضعیت با موفقیت انجام شد');

    }
}
