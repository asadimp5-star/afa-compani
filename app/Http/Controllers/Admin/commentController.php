<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
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
    public function edit($locale,Comment $comment)
    {
        $show =Comment::find($comment);
       
        return view('admin.reply-comment',compact('show'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($locale,Request $request, Comment $item)
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
    public function destroy($locale,Comment $comment)
    {
        $comment->delete();
        
        return redirect()->route('/admin')->with('success', 'نظر با موفقیت حذف شد');

    }
    public function status($locale ,Comment $comment){
        $comment->status = $comment->status == 1 ? 0 : 1;
        $comment->save();
        return redirect()->route('/admin')->with('success', 'تغییر وضعیت با موفقیت انجام شد');

    }
}
