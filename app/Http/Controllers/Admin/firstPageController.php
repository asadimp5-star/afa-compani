<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\first_pageRequest;
use App\Models\firstPage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class firstPageController extends Controller
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

     private function handleUpload($request,$field,$oldImage,$folred='first_page'){

        if($request->hasFile($field)){
            if($oldImage){
                Storage::disk('public')->delete($folred.'/'.$oldImage);
            }
            $file = $request->file($field);
            $name=Str::uuid().'-'.time().'.'.$file->getClientOriginalExtension();
            $file->storeAs($folred,$name,'public');
            return $name;
        }

        
        return $oldImage;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(first_pageRequest $request)
    {
        
        $data= $request->validated();
       
        $data['images0']= $this->handleUpload($request,'images0',null);
        $data['images']= $this->handleUpload($request,'images',null);
        $data['images1']= $this->handleUpload($request,'images1',null);
        $data['Fimg1']= $this->handleUpload($request,'Fimg1',null);
        $data['Fimg2']= $this->handleUpload($request,'Fimg2',null);
        $data['Fimg3']= $this->handleUpload($request,'Fimg3',null);
        
        
       $firstPage = firstPage::create($data);
    
        return redirect()->route('admin.site-content.first-page.index-update',$firstPage->id)->with('success','صفحه اول با موفقیت ساخته شد');
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
    public function edit(firstPage $first)
    {

        return view('admin.site-content.first-page.edit-first-page',compact('first'));
    }


    

    /**
     * Update the specified resource in storage.
     */
    public function update(first_pageRequest $request , firstPage $first)
    {
        $data = $request->validated();
        
        $data['images0'] = $this->handleUpload($request,'images0',$first->images0);
        $data['images'] = $this->handleUpload($request,'images',$first->images);
        $data['images1'] = $this->handleUpload($request,'images1',$first->images1);
        $data['Fimg1'] = $this->handleUpload($request,'Fimg1',$first->Fimg1);
        $data['Fimg2'] = $this->handleUpload($request,'Fimg2',$first->Fimg2);
        $data['Fimg3'] = $this->handleUpload($request,'Fimg3',$first->Fimg3);
       
        $first->update($data);
        return back()->with('success','صفحه اول با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
