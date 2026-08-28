<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\postRequest;
use App\Models\post;
use Illuminate\Support\Facades\Storage;
use  Illuminate\Support\Str;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $posts = post::orderBy('id' , 'desc')->paginate(3);

        return view('admin.posts.post' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.add-post');
    }


    private function handleUpload($request,$field,$deleteField,$oldImage,$folred='postImg'){

        if($request->hasFile($field)){
            if($oldImage){
                Storage::disk('public')->delete($folred.'/'.$oldImage);
            }
            $file = $request->file($field);
            $name=Str::uuid().'-'.time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('postsImg',$name,'public');
            return $name;
        }
        
        
        if($request->boolean($deleteField)){
            if($oldImage){
                Storage::disk('public')->delete($folred.'/'.$oldImage);
            }
            return null;
        }

        
        return $oldImage;
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(postRequest $request)
    {
        $data =$request->validated();

        

        $data['images0']=$this->handleUpload($request,'images0',null,null);
        $data['images']=$this->handleUpload($request,'images',null,null);
        $data['images1']=$this->handleUpload($request,'images1',null,null);

        $data['slug']=Str::slug($data['title'],'-',null);
        $data['user_Id']= 2;


        post::create($data);

        
        return redirect()->route('admin.posts.post')->with('success','مقاله با موفقیت ایجاد شد');

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
    public function edit(post $post)
    {
        // $show =post::find($post);
        return view('admin.posts.edit-post',compact('post'));       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(postRequest $request,post $post)
    {
        
        $data = $request->validated();
        $data['images0'] = $this->handleUpload($request,'images0','delete_img0',$post->images0);
        $data['images'] = $this->handleUpload($request,'images','delete_img',$post->images);
        $data['images1'] = $this->handleUpload($request,'images1','delete_img1',$post->images1);
        $data['slug']=Str::slug($data['title'],'-',null);
        
        
        
       $post->update($data);
       return redirect()->route('admin.posts.post')->with('success','مقاله با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.post')->with('success','پست با موفقیت حذف شد');
    }
    public function status($id){

        $item = post::findOrFail($id);
       
        $item->status = $item->status == 1 ? 0 : 1;
       
        $item->save();   
        
        return redirect()->route('admin.posts.post')->with('success','تغییر وضعیت با موفقیت انجام شد');
    }
}
