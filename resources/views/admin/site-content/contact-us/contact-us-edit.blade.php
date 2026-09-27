@extends('admin.layout.master-page')

@section('title','مدیریت محتوی')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.content.index') }}">مدیریت محتوی</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">ارتباط باما</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','ارتباط باما')

@section('content')


<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.content.contact-us.update',$contactUs) }}" method="post" enctype="multipart/form-data">
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
    <label for="fa_co_adress" class="form-label">آدرس شرکت</label>
    <input type="text" class="form-control" id="fa_co_adress" name="fa[co_adress]" value="{{ $contactUs->translate('fa')?->co_adress??'' }}" >
  </div>
  <div>
    <div class="col-6">
           <img src="{{ asset('storage/contact-Img/'. $contactUs->img) }}" class="bd-placeholder-img card-img-top" height="100%" role="img" width="100%" alt="#"> 

           @if ($contactUs->img)
          <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_imge0" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_imge0" value="1" id="delete0">
          <label class="form-check-label" for="delete_imge">حذف تصویر</label>
          </div>

           @endif
        </div>
        <div class="col-md-4">
          <label for="img" class="form-label">تصویر</label>
          <input class="form-control" type="file" id="img" name="img">
        </div>
  </div>

  <div class="mb-3 col-md-6">
    <label for="fa_factory_adress" class="form-label">آدرس کارگاه</label>    
    <input type="text" class="form-control" id="fa_factory_adress" name="fa[factory_adress]" value="{{ $contactUs->translate('fa')?->factory_adress??'' }}">

  </div>

  <div>
    <div class="col-6">
           <img src="{{ asset('storage/contact-Img/'. $contactUs->img1) }}" class="bd-placeholder-img card-img-top" height="100%" role="img" width="100%" alt="#"> 

           @if ($contactUs->img1)
          <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_imge" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_imge" value="1" id="delete0">
          <label class="form-check-label" for="delete_imge">حذف تصویر</label>
          </div>

           @endif
    </div>
        <div class="col-md-4">
            <label for="img1" class="form-label">تصویر1</label>
            <input class="form-control" type="file" id="img1" name="img1">
        </div>
  </div>

  <div class="mb-3">
    <label for="fa_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="fa_description" name="fa[description]">{{ $contactUs->translate('fa')?->description??'' }}</textarea>
  </div>

  <div class="col-md-4">
    <label for="fa_phone" class="form-label">تلفن</label>
    <input type="tel" class="form-control" id="fa_phone" name="fa[phone]" value="{{ $contactUs->translate('fa')?->phone??'' }}" >
  </div>

  <div class="col-md-4">
    <label for="fa_phone1" class="form-label">1 تلفن</label>
    <input type="tel" class="form-control" id="fa_phone1" name="fa[phone1]" value="{{ $contactUs->translate('fa')?->phone1??'' }}">
  </div>

  <div class="col-md-4">
    <label for="fa_email" class="form-label">ایمیل</label>
    <input type="email" class="form-control" id="fa_email" name="fa[email]" value="{{ $contactUs->translate('fa')?->email??'' }}">
  </div>


       </div>

       <div class="tab-pane fade" id="en">

          <div class="col-md-4">
    <label for="en_co_adress" class="form-label">آدرس شرکت</label>
    <input type="text" class="form-control" id="en_co_adress" name="en[co_adress]" value="{{ $contactUs->translate('en')?->co_adress??'' }}" >
  </div>
  

  <div class="mb-3 col-md-6">
    <label for="en_factory_adress" class="form-label">آدرس کارگاه</label>    
    <input type="text" class="form-control" id="en_factory_adress" name="en[factory_adress]" value="{{ $contactUs->translate('en')?->factory_adress??'' }}">

  </div>


  <div class="mb-3">
    <label for="en_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="en_description" name="en[description]">{{ $contactUs->translate('en')?->description??'' }}</textarea>
  </div>

  <div class="col-md-4">
    <label for="en_phone" class="form-label">تلفن</label>
    <input type="tel" class="form-control" id="en_phone" name="en[phone]" value="{{ $contactUs->translate('en')?->phone??'' }}">
  </div>

  <div class="col-md-4">
    <label for="en_phone1" class="form-label">1 تلفن</label>
    <input type="tel" class="form-control" id="en_phone1" name="en[phone1]" value="{{ $contactUs->translate('en')?->phone1??'' }}">
  </div>

  <div class="col-md-4">
    <label for="en_email" class="form-label">ایمیل</label>
    <input type="email" class="form-control" id="en_email" name="en[email]" value="{{ $contactUs->translate('en')?->email??'' }}">
  </div>

      
    



       </div>
  
  
  
  
  
</form>

 <div class="col-12 mt-4">
    <button class="btn btn-primary" type="submit">ثبت</button>
  </div>
  <div class="col-12 mt-2">
    <a class="btn btn-warning" href="{{ route('admin.content.index') }}">بازگشت</a>
  </div>
    </section>

</section>


@endsection