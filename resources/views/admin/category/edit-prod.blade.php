@extends('admin.layout.master-page')

@section('title','ویرایش کالا')

@section('produc','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.category.index') }}">لیست کالا</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">ویرایش کالا</li>
  </x-slot>
</x-manual.page-curent>
@endsection


@section('page-name','مشاهده و ویرایش کالا')

@section('content')

<section>
  

<form action="{{ route('admin.category.update',$item) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="col-md-6">
       <input  class="form-control" id="product_type" name="product_type" type="hidden" value="{{ $item->product_type }}"  required>
    </div>

  <div class="col-md-6">
    <label for="title"  class="form-label d-block invalid">عنوان*</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $item->title }}" required>
    @error('title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>
  <div class="col-md-6">
    <label for="product_code"  class="form-label d-block invalid">کد محصول*</label>
    <input type="text" class="form-control" id="title" name="product_code" value="{{ $item->product_code }}" required>
    @error('product_code')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>
    
  <section class="col-3 justify-content-center">

  <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/catImge/'. $item->imags) }}" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="{{ $item->title }}">

      @if ($item->imags)
        <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_imge" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_imge" value="1" id="delete0">
          <label class="form-check-label" for="delete_imge">حذف تصویر</label>
        </div>

      @endif

      
</div>
    
    <div class="card-body"> 
      <div class="col-md-12">
        <label for="imags" class="form-label">تصویر</label>
        <input class="form-control" type="file" name="imags">
      @error('imags')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
      @enderror
  </div>
 </div> 
 </div>
 
  </section>
  <div class="mb-3 col-8">
    <label for="description" class="form-label">توضیحات</label>
    <textarea class="form-control" name="description" >{{ $item->description }}</textarea>
    @error('description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  



<div class="col-12 mt-3">
    <button class="btn btn-primary" type="submit">ثبت</button>
  </div>
  <div class="col-12 mt-1">
    <a class="btn btn-warning" href="{{ route('admin.category.index') }}">بازگشت</a>
  </div>
</form>
</section>


@endsection