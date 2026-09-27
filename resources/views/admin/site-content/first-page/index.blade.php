@extends('admin.layout.master-page')

@section('title','مدیریت محتوی')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.content.index') }}">مدیریت محتوی</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">مدیریت صفحه اول</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','مدیریت صفحه اول')

@section('content')


<section class="m-5">
    
  <section>
 <form class="row g-3 yekan" action="{{ route('admin.content.first-page.store') }}" method="post" enctype="multipart/form-data">
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
    <label for="Fimg1" class="form-label">تصاویر متحرک</label>
    <input class="form-control" type="file" name="Fimg1">
    @error('Fimg1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-md-4">
    <label for="Fimg2" class="form-label">تصاویر متحرک</label>
    <input class="form-control" type="file" name="Fimg2">
    @error('Fimg2')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-md-4">
    <label for="Fimg3" class="form-label">تصاویر متحرک</label>
    <input class="form-control" type="file" name="Fimg3" >
    @error('Fimg3')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

    <div class="col-md-4">
    <label for="fa_baner" class="form-label">عنوان بنر سایت</label>
    <input type="text" class="form-control" name="fa[baner]" id="fa_baner" value="{{ old('fa.baner') }}" >
    @error('fa.baner')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

    <div class="col-md-4">
    <label for="images0" class="form-label">تصویر بنر</label>
    <input class="form-control" type="file" id="images0" name="images0">
    @error('images0')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

    <div class="mb-3">
    <label for="fa_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="fa_description" name="fa[description]" placeholder="توضیحات  را اینجا وارد کنید"></textarea>
    @error('fa.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

  <div class="col-md-4">
    <label for="images" class="form-label">تصویر1</label>
    <input class="form-control" type="file" name="images" id="images">
    @error('images')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="fa_description1" class="form-label">1توضیحات</label>
    <textarea class="form-control" id="fa_description1" name="fa[description1]" placeholder="توضیحات را اینجا وارد کنید"></textarea>
    @error('fa.description1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-4">
    <label for="images1" class="form-label">تصویر2</label>
    <input class="form-control" type="file" id="images1" name="images1">
    @error('images1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="fa_description2" class="form-label">توضیحات2</label>
    <textarea class="form-control" id="fa_description2" name="fa[description2]" placeholder="توضیحات را اینجا وارد کنید"></textarea>
    @error('fa.description2')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  


       </div>

       <div class="tab-pane fade" id="en">

      
    

    <div class="col-md-4">
    <label for="en_baner" class="form-label">عنوان بنر سایت</label>
    <input type="text" class="form-control" name="en[baner]" id="en_baner" value="{{ old('en.baner') }}" required>
    @error('en.baner')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

    

    <div class="mb-3">
    <label for="en_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="en_description" name="en[description]" placeholder="توضیحات  را اینجا وارد کنید"></textarea>
    @error('en.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

  

  <div class="mb-3">
    <label for="en_description1" class="form-label">1توضیحات</label>
    <textarea class="form-control" id="en_description1" name="en[description1]" placeholder="توضیحات را اینجا وارد کنید"></textarea>
    @error('en.description1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  

  <div class="mb-3">
    <label for="en_description2" class="form-label">توضیحات2</label>
    <textarea class="form-control" id="en_description2" name="en[description2]" placeholder="توضیحات را اینجا وارد کنید"></textarea>
    @error('en.description2')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
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