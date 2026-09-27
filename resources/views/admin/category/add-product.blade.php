@extends('admin.layout.master-page')

@section('title','افزودن کالا')

@section('produc','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.category.index') }}">لیست کالا</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">افزودن کالا</li>
  </x-slot>
</x-manual.page-curent>
@endsection


@section('page-name','افزودن کالا')

@section('content')



<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
      @csrf

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
    <input type="text" class="form-control" id="fa_title" name="fa[title]" value="{{ old('fa.title') }}" >
    @error('fa.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
    <label for="fa_slug" class="form-label">اسلاگ</label>
    <input type="text" class="form-control" id="fa_slug" name="fa[slug]" value="{{ old('fa.slug') }}" >
    @error('fa.slug')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
    <label for="product_code" class="form-label">کد محصول</label>
    <input type="text" class="form-control" id="product_code" name="product_code" >
    @error('product_code')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
  <label for="imags" class="form-label">تصویر</label>
  <input class="form-control" type="file" id="imags" name="imags">
  @error('imags')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
</div>
<section class="d-flex mt-4">
  <div class="col-md-2 mt-4">
    <select class="form-select" name="product_type"  aria-label="select example">
      <option value="">نوع کالا را انتخاب کنید</option>
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

  <div class="mb-3 mt-5 col-8">
    <label for="fa_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="fa_description" name="fa[description]" placeholder="توضیحات درباره کالا را اینجا وارد کنید"></textarea>
    @error('fa.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  


       </div>

       <div class="tab-pane fade" id="en">

       <div class="col-md-4">
    <label for="en_title" class="form-label">title</label>
    <input type="text" class="form-control" id="en_title" name="en[title]" value="{{ old('en.title') }}" >
    @error('en.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
    <label for="en_slug" class="form-label">اسلاگ</label>
    <input type="text" class="form-control" id="en_slug" name="en[slug]" value="{{ old('en.slug') }}" >
    @error('en.slug')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-8">
    <label for="en_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="en_description" name="en[description]" placeholder="توضیحات درباره کالا را اینجا وارد کنید"></textarea>
    @error('en.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>


       </div>




       </div>
  
  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">ثبت کالا</button>
  </div>
 
</form>
    </section>
<div class="col-12">
    <a class="btn btn-warning" href="{{ route('admin.category.index') }}">بازگشت</a>
  </div>
</section>













@endsection