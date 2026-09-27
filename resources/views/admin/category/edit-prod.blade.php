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
  

<form action="{{ route('admin.category.update',$item->id) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')

   <ul class="nav nav-tabs mb-3" id="langTab" role="tablist">
        <li class="nav-item">
          <a href="#fa" class="nav-link active" data-bs-toggle="tab">فارسی</a>
        </li>
        <li class="nav-item">
          <a href="#en" class="nav-link" data-bs-toggle="tab">English</a>
        </li>
       </ul>
       <div class="tab-content">

       <div class="tab-pane fade show active" id="fa">

        <div class="col-md-4">
    <label for="fa_title" class="form-label">عنوان</label>
    <input type="text" class="form-control" id="fa_title" name="fa[title]" value="{{ $item->translate('fa')?->title??'' }}" >
    @error('fa.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
    <label for="fa_slug" class="form-label">اسلاگ</label>
    <input type="text" class="form-control" id="fa_slug" name="fa[slug]" value="{{ $item->translate('fa')?->slug??'' }}" >
    @error('fa.slug')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
    <label for="product_code" class="form-label">کد محصول</label>
    <input type="text" class="form-control" id="product_code" name="product_code" value="{{ $item->product_code }}">
    @error('product_code')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  
  <section class="col-3 justify-content-center">

    <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/catImge/' .$item->imags) }}" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="{{ $item->translate('fa')?->title??'' }}">

      @if ($item->imags)
        <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_imge" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_imge" value="1" id="delete0">
          <label class="form-check-label" for="delete_imge">حذف تصویر</label>
        </div>

      @endif

      
    </div> 
    
    <div class="card-body"> 
      <div class="col-md-10">
    <label for="imags" class="form-label">تصویر</label>
    <input class="form-control" type="file" name="imags">
    @error('imags')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
    </div>
    
    
</section>



<section class="d-flex">
  <div class="col-md-2">
    <select class="form-select" name="product_type" required aria-label="select example">
      <option value="{{ $item->product_type }}">نوع کالا را انتخاب کنید</option>
      <option value="0" {{ old('product_type')=='0'?'selected':'' }}>شامپو کارواش</option>
      <option value="1" {{ old('product_type')=='1'?'selected':'' }}>واکس تایر</option>
      <option value="3" {{ old('product_type')=='3'?'selected':'' }}>مایع کف شوی مکانیزه</option>
      <option value="2" {{ old('product_type')=='2'?'selected':'' }}>مایع کف شوی دستی</option>
    </select>
    @error('product_type')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

</section>

  <div class="mb-3 col-8">
    <label for="fa_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="fa_description" name="fa[description]">{{ $item->translate('fa')?->description??'' }}</textarea>
    @error('fa.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  


       </div>

       <div class="tab-pane fade" id="en">

       <div class="col-md-4">
    <label for="en_title" class="form-label">title</label>
    <input type="text" class="form-control" id="en_title" name="en[title]" value="{{ $item->translate('en')?->title??'' }}" >
    @error('en.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
    <label for="en_slug" class="form-label">اسلاگ</label>
    <input type="text" class="form-control" id="en_slug" name="en[slug]" value="{{ $item->translate('en')?->slug??'' }}" >
    @error('en.slug')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-8">
    <label for="en_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="en_description" name="en[description]">{{ $item->translate('en')?->description??'' }}</textarea>
    @error('en.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>


       </div>




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