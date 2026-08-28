@extends('admin.layout.master-page')

@section('title','ویرایش مقالات')

@section('pos','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 " aria-current="page"><a class="text-decoration-none" href="{{ route('admin.posts.post') }}">لیست مقالات</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">ویرایش مقالات</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','ویرایش مقالات')

@section('content')

<section>
  

<form action="{{ route('admin.posts.update',$post) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="col-md-6">
    <label for="title"  class="form-label d-block invalid">عنوان*</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
    @error('title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>
  <section class="col-3 justify-content-center">

  <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/postsImg/'. $post->images0) }}" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="{{ $post->title }}">

      @if ($post->images0)
        <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_img0" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_img0" value="1" id="delete0">
          <label class="form-check-label" for="delete_img0">حذف تصویر</label>
        </div>

      @endif

      
</div>
    
    <div class="card-body"> 
      <div class="col-md-12">
        <label for="images0" class="form-label">تصویر</label>
        <input class="form-control" type="file" name="images0">
      @error('images0')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
      @enderror
  </div>
 </div> 
 </div>
 
  </section>
  <div class="mb-3 col-8">
    <label for="description" class="form-label">توضیحات</label>
    <textarea class="form-control" name="description" >{{ $post->description }}</textarea>
    @error('description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <section class="col-3 justify-content-center">

  <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/postsImg/'. $post->images) }}" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="{{ $post->title }}">

      @if ($post->images)
        <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_img" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_img" value="1" id="delete">
          <label class="form-check-label" for="delete_img">حذف تصویر</label>
        </div>

      @endif

      
</div>
    
<div class="card-body"> 
      <div class="col-md-12">
        <label for="images" class="form-label">تصویر</label>
        <input class="form-control" type="file" name="images">
      @error('images')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
      @enderror
      </div>
 </div> 
 </div>
 
  </section>
  <div class="mb-3 col-8">
    <label for="description1" class="form-label">1توضیحات</label>
    <textarea class="form-control" name="description1">{{ $post->description1 }}</textarea>
    @error('description1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <section class="col-3 justify-content-center">

  <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/postsImg/'. $post->images1) }}" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="{{ $post->title }}">

      @if ($post->images1)
        <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_img1" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_img1" value="1" id="delete1">
          <label class="form-check-label" for="delete_img1">حذف تصویر</label>
        </div>

      @endif

      
</div>
    
<div class="card-body"> 
      <div class="col-md-12">
        <label for="images1" class="form-label">تصویر</label>
        <input class="form-control" type="file" name="images1">
      @error('images1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
      @enderror
      </div>
 </div> 
 </div>
 
  </section>
  <div class="mb-3 col-8">
    <label for="description2" class="form-label">توضیحات2</label>
    <textarea class="form-control" name="description2">{{ $post->description2 }}</textarea>
    @error('description2')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>



<div class="col-12 mt-3">
    <button class="btn btn-primary" type="submit">ثبت</button>
  </div>
  <div class="col-12 mt-1">
    <a class="btn btn-warning" href="{{ route('admin.posts.post') }}">بازگشت</a>
  </div>
</form>
</section>


@endsection