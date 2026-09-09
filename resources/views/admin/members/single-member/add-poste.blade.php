@extends('admin.members.single-member.member-master')

@section('title','نوشتن پست')

@section('index','active')



@section('curent-page')
<x-manual.member-page-curent>
    <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page">افزودن مقاله</li>
    </x-slot>

</x-manual.member-page-curent>

@endsection

@section('page-name','نوشتن پست')

@section('content')

<section>
    <form class="row g-3 yekan" action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
      @csrf

  <div class="col-md-4">
    <label for="title"  class="form-label d-block invalid">عنوان*</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
    @error('title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>
  

  <div class="col-md-4">
    <label for="images0" class="form-label">تصویر</label>
    <input class="form-control" type="file" name="images0">
    @error('images0')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-9">
    <label for="description" class="form-label">توضیحات</label>
    <textarea class="form-control" name="description" placeholder="توضیحات درباره عضو را اینجا وارد کنید"></textarea>
    @error('description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-4">
    <label for="images" class="form-label">تصویر1</label>
    <input class="form-control" type="file" name="images">
    @error('images')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-9">
    <label for="description1" class="form-label">1توضیحات</label>
    <textarea class="form-control" name="description1" placeholder="توضیحات درباره عضو را اینجا وارد کنید"></textarea>
    @error('description1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-4">
    <label for="images1" class="form-label">تصویر2</label>
    <input class="form-control" type="file" name="images1">
    @error('images1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-9">
    <label for="description2" class="form-label">توضیحات2</label>
    <textarea class="form-control" name="description2" placeholder="توضیحات درباره عضو را اینجا وارد کنید"></textarea>
    @error('description2')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>








  

<section class="d-flex">
  
<!-- 
  <div class="col-md-4">
  <label for="user_Id" class="form-label">نام نویسنده</label>
  <input class="form-control" type="text" name="user_Id" value="">
  </div> -->

  

</section>
  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">ثبت</button>
  </div>
  <div class="col-12">
    <a class="btn btn-warning" href="{{ route('admin.users.user-dashboard') }}">بازگشت</a>
  </div>
</form>
    </section>

@endsection