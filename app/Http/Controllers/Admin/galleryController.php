<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\galleryRequest;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class galleryController extends Controller
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
        return view('admin.site-content.gallery.add-img-gallery');
    }

    private function handleImgUpload($request,$field,$oldImg,$folder='gallery-img'){

        if(!$request->hasfile($field)){
            return $oldImg;
        }
        if($request->hasfile($field)){
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
    public function store(galleryRequest $request)
    {
        $data = $request->validated();
        $data['images'] = $this->handleImgUpload($request,'images',null);
        gallery::create($data);
        return redirect()->route('admin.content.gallery')->with('success','عکس با موفقیت بارکذاری شد');
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
    public function edit(gallery $item)
    {
        return view('admin.site-content.gallery.edit-gallery',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(galleryRequest $request, gallery $item)
    {
        $data = $request->validated();
        $data['images']= $this->handleImgUpload($request,'images',$item->images);
        $item->update($data);
        return back()->with('success','با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery $item)
    {
        $item->delete();
        return back()->with('success','با موفقیت پاک شد');
    }

    public function status(gallery $item)
    {
        $item->status = $item->status == 1 ? 0 : 1;
        $item->save();
        return back()->with('success','فعالیت با موفقیت تغییر کرد');

    }
}
