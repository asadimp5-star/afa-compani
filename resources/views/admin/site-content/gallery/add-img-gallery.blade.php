@extends('admin.layout.master-page')

@section('title','افزودن عکس')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.content.index') }}">مدیریت محتوی</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.content.gallery') }}">مدیریت گالری</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">افزودن عکس </li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','افزودن عکس')

@section('content')


<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.content.gallery.store') }}" method="post" enctype="multipart/form-data">
      @csrf
  <div class="col-md-4">
    <label for="title" class="form-label">عنوان</label>
    <input type="text" class="form-control" id="title" name="title" required>
    @error('title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-4">
    <label for="images" class="form-label">تصویر</label>
    <input class="form-control" type="file" id="images" name="images" required>
    @error('images')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-7">
    <label for="description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="description" name="description" placeholder="توضیحات درباره عضو را اینجا وارد کنید" required></textarea>
    @error('description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

    

 
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">ثبت</button>
  </div>
  <div class="col-12">
    <a class="btn btn-warning" href="{{ route('admin.content.gallery') }}">بازگشت</a>
  </div>
</form>
    </section>

</section>


@endsection