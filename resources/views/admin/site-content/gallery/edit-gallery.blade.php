@extends('admin.layout.master-page')

@section('title','ویرایش عکس')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.content.index') }}">مدیریت محتوی</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.content.gallery') }}">مدیریت گالری</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">ویرایش عکس </li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','ویرایش عکس')

@section('content')

<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.content.gallery.update',$item->id) }}" method="post" enctype="multipart/form-data">
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

  <div>
    <div class="col-3">
           <img src="{{ asset('storage/gallery-img/'. $item->images) }}" class="bd-placeholder-img card-img-top" height="30%" role="img" width="30%" alt="{{ $item->title }}"> 
        </div>
        <div class="col-md-4">
          <label for="images" class="form-label">تصویر</label>
          <input class="form-control" type="file" id="images" name="images">
        </div>
  </div>

  <div class="mb-3 col-7">
    <label for="fa_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="fa_description" name="fa[description]">{{ $item->translate('fa')?->description??'' }}</textarea>
    @error('fa.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>




       </div>

       <div class="tab-pane fade" id="en">

            <div class="col-md-4">
    <label for="en_title" class="form-label">عنوان</label>
    <input type="text" class="form-control" id="en_title" name="en[title]" value="{{ $item->translate('en')?->title??'' }}" >
    @error('en.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>


  <div class="mb-3 col-7">
    <label for="en_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="en_description" name="en[description]" >{{ $item->translate('en')?->description??'' }}</textarea>
    @error('en.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

      
    



       </div>
  
  
  
  
  
</form>
<div class="col-12">
    <button class="btn btn-primary" type="submit">ثبت</button>
  </div>
  <div class="col-12">
    <a class="btn btn-warning" href="{{ route('admin.content.gallery') }}">بازگشت</a>
  </div>

    </section>

</section>

@endsection