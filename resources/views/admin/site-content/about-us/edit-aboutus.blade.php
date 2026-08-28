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

<section>
 <form class="row g-3 yekan" action="{{ route('admin.content.abouts.updat',$abouts) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  
  <div class="col-md-4">
    <label for="title" class="form-label">عنوان بنر سایت</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ $abouts->title }}" >
    @error('title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>
  
  <div class="col-10 d-block">
    <div class="card col-9 shadow-sm mt-2" > 
      <div class="col-8">
          <img src="{{ asset('storage/about-Img/'. $abouts->images0) }}" class="bd-placeholder-img card-img-top" height="50%" role="img" width="50%%" alt="#">
         
          @if ($abouts->images0)
          <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_imge" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_imge" value="1" id="delete0">
          <label class="form-check-label" for="delete_imge">حذف تصویر</label>
          </div>

           @endif

      </div>
      


      <div class="col-md-8">
    <label for="images0" class="form-label">تصاویر 1</label>
    <input class="form-control" type="file" name="images0">
    @error('images0')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
      </div>

    </div>  
  </div>
    

    <div class="mb-3 col-8">
    <label for="description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="description" name="description" placeholder="توضیحات  را اینجا وارد کنید">{{ $abouts->description }}</textarea>
    @error('description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

    <div>
        <div class="col-6">
           <img src="{{ asset('storage/about-Img/'. $abouts->images) }}" class="bd-placeholder-img card-img-top" height="100%" role="img" width="100%" alt="#"> 

           @if ($abouts->images)
          <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_imge0" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_imge0" value="1" id="delete0">
          <label class="form-check-label" for="delete_imge">حذف تصویر</label>
          </div>

           @endif
        </div>
        
        <div class="col-md-4">
            <label for="images" class="form-label">تصویر1</label>
            <input class="form-control" type="file" name="images" id="images">
            @error('images')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
    </div>
  

  <div class="mb-3 col-8">
    <label for="description1" class="form-label">1توضیحات</label>
    <textarea class="form-control" id="description1" name="description1" placeholder="توضیحات را اینجا وارد کنید">{{ $abouts->description1 }}</textarea>
    @error('description1')
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


@endsection