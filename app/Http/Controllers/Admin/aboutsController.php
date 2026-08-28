<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\aboutRequest;
use App\Models\about;
use Faker\Core\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class aboutsController extends Controller
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

    private function handelUploadImg($request,$field,$oldImg,$deleteField,$folder='about-Img'){
        
        
        if($request->boolean($deleteField)){
            if($oldImg){
                Storage::disk('public')->delete($folder.'/'.$oldImg);
            }
            return null;
        }
        if(!$request->hasFile($field)){
            return $oldImg;
        }
        if($request->hasFile($field)){
            if($oldImg){
                Storage::disk('public')->delete($folder.'/'.$oldImg);
            }
            $file = $request->file($field);
            $name=Str::uuid().'-'.time().'.'.$file->getClientOriginalExtension();
            $file->storeAs($folder,$name,'public');
            return $name;
        }
        


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(aboutRequest $request)
    {
        $data = $request->validated();
        $data['images0']= $this->handelUploadImg($request,'images0',null,null);
        $data['images']= $this->handelUploadImg($request,'images',null,null);
        $data['slug']= Str::slug($data['title'],'-',null);

        $abouts = about::create($data);
        return redirect()->route('admin.site-content.about-us.about-us',$abouts->id) ->with('success','درباره ما با موفقیت ساخته شد');
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
    public function edit(about $abouts)
    {

        return view('admin.site-content.about-us.edit-aboutus',compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(aboutRequest $request, about $abouts)
    {
        
        $data = $request->validated();
        $data['images0']= $this->handelUploadImg($request,'images0',$abouts->images0,'delete_imge');
        $data['images']= $this->handelUploadImg($request,'images',$abouts->images,'delete_imge0');
      
        $abouts->update($data);
        return back()->with('success','صفحه با ما با موفقیت ایجاد شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
