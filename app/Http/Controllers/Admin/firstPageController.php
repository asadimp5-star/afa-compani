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

       $firstPage = firstPage::create([
        'images0'=> $this->handleUpload($request,'images0',null),
        'images'=> $this->handleUpload($request,'images',null),
        'images1'=> $this->handleUpload($request,'images1',null),
        'Fimg1'=> $this->handleUpload($request,'Fimg1',null),
        'Fimg2'=> $this->handleUpload($request,'Fimg2',null),
        'Fimg3'=> $this->handleUpload($request,'Fimg3',null)
        ]);
        foreach(['fa','en'] as $locale){
            if(! empty($data[$locale]['baner'])){
                $firstPage->translateOrNew($locale)->fill($data[$locale]);
            }
        }
        $firstPage->save();

       
    
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
    public function edit($locale,firstPage $first)
    {

        return view('admin.site-content.first-page.edit-first-page',compact('first'));
    }


    

    /**
     * Update the specified resource in storage.
     */
    public function update($locale,first_pageRequest $request , firstPage $first)
    {

        $item = $first;

        $data = $request->validated();
        
        $item->images0 = $this->handleUpload($request,'images0',$item->images0);
        $item->images = $this->handleUpload($request,'images',$item->images);
        $item->images1 = $this->handleUpload($request,'images1',$item->images1);
        $item->Fimg1 = $this->handleUpload($request,'Fimg1',$item->Fimg1);
        $item->Fimg2 = $this->handleUpload($request,'Fimg2',$item->Fimg2);
        $item->Fimg3 = $this->handleUpload($request,'Fimg3',$item->Fimg3);
        $item->save();
       
        foreach(['fa','en'] as $lang){
            if(! empty($data[$lang]['baner'])){
                $item->translateOrNew($lang)->fill($data[$lang]);
            }
        }
       $item->save();
        
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
