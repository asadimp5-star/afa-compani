<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\contactRequest;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class contactController extends Controller
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

    private function ImgUploadHandle($request,$field,$oldImg,$deleteBotton,$folder='contact-Img'){

        if($request->boolean($deleteBotton)){
            if($oldImg){
                Storage::disk('public')->delete($folder.'/'.$oldImg);
            }
            return null;
        }
        if(! $request->hasfile($field)){
            return $oldImg;
        }
        
        if($request->hasfile($field)){
            if($oldImg){
                Storage::disk('public')->delete($folder.'/'.$oldImg);
            }
            $files = $request->file($field);
            $name=Str::uuid().'-'.time().'.'.$files->getClientOriginalExtension();
            $files->storeAs($folder,$name,'public');
            return $name;
        }
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(contactRequest $request)
    {
        $data= $request->validated();
        
        $data['img']= $this->ImgUploadHandle($request,'img',null,null);
        $data['img1']= $this->ImgUploadHandle($request,'img1',null,null);
        
       $contactUs = contact::create($data);
        return redirect()->route('admin.content.contact-us.contact-us-edit',$contactUs->id)->with('success','ارتباط با ما ایجاد شد');
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
    public function edit(contact $contactUs)
    {
        return view('admin.site-content.contact-us.contact-us-edit',compact('contactUs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(contactRequest $request, contact $contactUs)
    {
        $data = $request->validated();
        $data['img'] = $this->ImgUploadHandle($request,'img',$contactUs->img,'delete_imge0');
        $data['img1'] = $this->ImgUploadHandle($request,'img1',$contactUs->img1,'delete_imge');
        $contactUs->update($data);
        return back()->with('success','ارتباط با ما با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
