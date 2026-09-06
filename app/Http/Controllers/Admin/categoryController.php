<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.categories');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add-product');
    }


    private function handleUpload($request,$field,$deleteField,$oldImage,$folred='catImge'){

        if($request->hasFile($field)){
            if($oldImage){
                Storage::disk('public')->delete($folred.'/'.$oldImage);
            }
            $file = $request->file($field);
            $name=Str::uuid().'-'.time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('catImge',$name,'public');
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
    public function store(categoryRequest $request)
    {
        $data = $request->validated();
        $data['imags']= $this->handleUpload($request,'imags',null,null);
        $data['slug']= Str::slug($data['title'],'-',null);

        category::create($data);    
        return redirect()->route('admin.category.index')->with('success','کالای جدید اضافه شد');
    }

    /**
     * Display the specified resource.
     */
    public function status(category $item)
    {   
        $item->status = $item->status == 1 ? 0 : 1;
        $item->save();
        return back()->with('success','تغییر وضعیت با موفقیت انجام شد');        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $item)
    {
        return view('admin.category.edit-prod',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(categoryRequest $request, category $item)
    {
        
        $data = $request->validated();
        $data['imags'] = $this->handleUpload($request,'imags','delete_imge',$item->imags);
        $data['slug']=Str::slug($data['title'],'-',null);
        $item->update($data);
        
        return back()->with('success','کالا با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $item)
    {
        $item->delete();
        return back()->with('success','کالا با موفقیت حذف شد');
    }
    public function carWash(category $category){

        $carWas = category::where('product_type','=', 0)->orderByDesc('created_at')->paginate(3);

        return view('admin.category.car-wash',compact('carWas'));
    }
    public function wax(category $category){
        $waxT = category::where('product_type','=', 1)->orderByDesc('created_at')->paginate(3);

        return view('admin.category.wax',compact('waxT'));
    }
    public function floor(category $category){
        $floo = category::where('product_type','=',3)->orderByDesc('created_at')->paginate(3);
        return view('admin.category.floor-wash',compact('floo'));
    }
    public function Mfloor(category $category){
        $Mfloo = category::where('product_type','=', 2)->orderByDesc('created_at')->paginate(3);
        return view('admin.category.maual-floor',compact('Mfloo'));
    }
}
