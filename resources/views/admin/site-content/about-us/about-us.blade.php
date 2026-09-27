@extends('admin.layout.master-page')

@section('title','مدیریت محتوی')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.content.index') }}">مدیریت محتوی</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">درباره ما</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','درباره ما')

@section('content')


<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.content.about-us.store') }}" method="post" enctype="multipart/form-data">
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
    <label for="fa_title"  class="form-label d-block ">عنوان*</label>
    <input type="text" class="form-control" id="fa_title" name="fa[title]" value="{{ old('fa.title') }}">
    @error('fa.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>
  <div class="col-md-4">
    <label for="fa_slug"  class="form-label d-block ">اسلاگ*</label>
    <input type="text" class="form-control" id="fa_slug" name="fa[slug]" value="{{ old('fa.slug') }}">
    @error('fa.slug')
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

<div class="mb-3 col-8">
    <label for="fa_description" class="form-label">توضیحات</label>
    <textarea class="form-control" name="fa[description]" placeholder="توضیحات درباره عضو را اینجا وارد کنید"></textarea>
    @error('fa.description')
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

  <div class="mb-3 col-8">
    <label for="fa_description1" class="form-label">1توضیحات</label>
    <textarea class="form-control" name="fa[description1]" placeholder="توضیحات درباره عضو را اینجا وارد کنید"></textarea>
    @error('fa.description1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>            


        </div>
  
        <div class="tab-pane fade" id="en">
<div class="col-md-4 tab-pane fade show active" id="en">
    <label for="en_title"  class="form-label d-block ">title*</label>
    <input type="text" class="form-control" id="en_title" name="en[title]" value="{{ old('en.title') }}">
    @error('en.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>

  <div class="col-md-4">
    <label for="en_slug"  class="form-label d-block ">slug*</label>
    <input type="text" class="form-control" id="en_slug" name="en[slug]" value="{{ old('en.slug') }}">
    @error('en.slug')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>
  
  <div class="mb-3 col-8">
    <label for="en_description" class="form-label">description</label>
    <textarea class="form-control" name="en[description]" placeholder="توضیحات درباره عضو را اینجا وارد کنید"></textarea>
    @error('en.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-8">
    <label for="en_description1" class="form-label">description1</label>
    <textarea class="form-control" name="en[description1]" placeholder="توضیحات درباره عضو را اینجا وارد کنید"></textarea>
    @error('en.description1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
 
        </div>


      </div>




  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">ثبت</button>
  </div>
  <div class="col-12">
    <a class="btn btn-warning" href="{{ route('admin.content.index') }}">بازگشت</a>
  </div>
</form>
    </section>

</section>


@endsection