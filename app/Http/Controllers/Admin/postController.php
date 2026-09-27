<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\postRequest;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use  Illuminate\Support\Str;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $posts = post::with('translations')->orderBy('id' , 'desc')->paginate(3);

        return view('admin.posts.post' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.add-post');
    }


    private function handleUpload($request,$field,$deleteField,$oldImage,$folred='postsImg'){

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
        

       $post= post::create([
        'images0'=>$this->handleUpload($request,'images0',null,null),
        'images'=>$this->handleUpload($request,'images',null,null),
        'images1'=>$this->handleUpload($request,'images1',null,null),
        
        'user_Id'=> Auth::id(),
       ]); 
       foreach(['fa','en'] as $locale){
            if(! empty($data[$locale]['title'])){
                $post->translateOrNew($locale)->fill($data[$locale]);
            }
       }
       
       $post->save();
       

        return back()->with('success','مقاله با موفقیت ایجاد شد');

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
    public function edit($locale,post $post)
    {
        // $show =post::find($post);
        

        return view('admin.posts.edit-post',compact('post'));       
    }
    public function userEdit($locale,post $Upost){
        
        return view('admin.members.single-member.edit-poste',compact('Upost'));       

    }

    /**
     * Update the specified resource in storage.
     */
    public function update($locale,postRequest $request, $id)
    {
        $post = post::findOrFail($id);
        
        $data = $request->validated();


        $post->images0 = $this->handleUpload($request,'images0','delete_img0',$post->images0);
        $post->images = $this->handleUpload($request,'images','delete_img',$post->images);
        $post->images1 = $this->handleUpload($request,'images1','delete_img1',$post->images1);
        $post->save();

        foreach(['fa','en'] as $lang){
            
                $post->translateOrNew($lang)->fill($data[$lang]);
            
        }
       $post->save(); 
    

       return back()->with('success','مقاله با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($locale,post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.post')->with('success','پست با موفقیت حذف شد');
    }
     public function Udestroy($locale,post $Upost)
    {
        $Upost->delete();
        return redirect()->route('admin.users.user-dashboard')->with('success','پست با موفقیت حذف شد');
    }
    public function status($locale,$id){

        $item = post::findOrFail($id);
       
        $item->status = $item->status == 1 ? 0 : 1;
       
        $item->save();   
        
        return redirect()->route('admin.posts.post')->with('success','تغییر وضعیت با موفقیت انجام شد');
    }
}
