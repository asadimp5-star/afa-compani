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
 <form class="row g-3 yekan" action="{{ route('admin.content.first-page.update',$first) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="col-10 d-block">
    <div class="card col-6 shadow-sm mt-2" > 
      <div class="col-8">
          <img src="{{ asset('storage/first_page/'. $first->Fimg1) }}" class="bd-placeholder-img card-img-top" height="50%" role="img" width="50%%" alt="#">
      </div>
      


      <div class="col-md-8">
    <label for="Fimg1" class="form-label">تصاویر متحرک</label>
    <input class="form-control" type="file" name="Fimg1">
    @error('Fimg1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

      
    </div>
    <div class="card col-6 shadow-sm mt-2" > 
      <div class="col-8">
        <img src="{{ asset('storage/first_page/'. $first->Fimg2) }}" class="bd-placeholder-img card-img-top" height="50%" role="img" width="50%" alt="#">
      </div>
      

      

      <div class="col-md-8">
    <label for="Fimg2" class="form-label">تصاویر متحرک</label>
    <input class="form-control" type="file" name="Fimg2">
    @error('Fimg2')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

      
    </div>
    
    <div class="card col-6 shadow-sm mt-2" > 
      <div class="col-8">
        <img src="{{ asset('storage/first_page/'. $first->Fimg3) }}" class="bd-placeholder-img card-img-top" height="50%" role="img" width="50%%" alt="#">
      </div>

      

      <div class="col-md-8">
    <label for="Fimg3" class="form-label">تصاویر متحرک</label>
    <input class="form-control" type="file" name="Fimg3">
    @error('Fimg3')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

      
    </div>
      
  </div>
    
    

    <div class="col-md-4">
    <label for="baner" class="form-label">عنوان بنر سایت</label>
    <input type="text" class="form-control" name="baner" id="baner" value="{{ $first->baner }}" required>
    @error('baner')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

    <div>
        <div class="col-4">
           <img src="{{ asset('storage/first_page/'.$first->images0) }}" class="bd-placeholder-img card-img-top" height="50%" role="img" width="50%" alt="#"> 
        </div>
        
        <div class="col-md-4">
           <label for="images0" class="form-label">تصویر بنر</label>
           <input class="form-control" type="file" id="images0" name="images0">
           @error('images0')
           <div class="alert alert-danger mt-1">{{ $message }}</div>
           @enderror
        </div>
    </div>
    

    <div class="mb-3">
    <label for="description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="description" name="description" placeholder="توضیحات  را اینجا وارد کنید">{{ $first->description }}</textarea>
    @error('description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

    <div>
        <div class="col-6">
           <img src="{{ asset('storage/first_page/'. $first->images) }}" class="bd-placeholder-img card-img-top" height="100%" role="img" width="100%" alt="#"> 
        </div>
        
        <div class="col-md-4">
            <label for="images" class="form-label">تصویر1</label>
            <input class="form-control" type="file" name="images" id="images">
            @error('images')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
    </div>
  

  <div class="mb-3">
    <label for="description1" class="form-label">1توضیحات</label>
    <textarea class="form-control" id="description1" name="description1" placeholder="توضیحات را اینجا وارد کنید">{{ $first->description1 }}</textarea>
    @error('description1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div>
    <div class="col-6">
        <img src="{{ asset('storage/first_page/'.$first->images1) }}" class="bd-placeholder-img card-img-top" height="100%" role="img" width="100%" alt="#">
    </div>
    

    <div class="col-md-4">
        <label for="images1" class="form-label">تصویر2</label>
        <input class="form-control" type="file" id="images1" name="images1">
        @error('images1')
        <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
  </div>
  

  <div class="mb-3">
    <label for="description2" class="form-label">توضیحات2</label>
    <textarea class="form-control" id="description2" name="description2" placeholder="توضیحات را اینجا وارد کنید">{{ $first->description2 }}</textarea>
    @error('description2')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
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