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
    <form class="row g-3 yekan" action="{{ route('admin.content.contact-us.store') }}" method="post" enctype="multipart/form-data">
      @csrf
  <div class="col-md-4">
    <label for="co_adress" class="form-label">آدرس شرکت</label>
    <input type="text" class="form-control" id="co_adress" name="co_adress">
  </div>
  <div class="col-md-4">
    <label for="img" class="form-label">تصویر</label>
    <input class="form-control" type="file" id="img" name="img">
  </div>

  <div class="mb-3 col-md-6">
    <label for="factory_adress" class="form-label">آدرس کارگاه</label>    
    <input type="text" class="form-control" id="factory_adress" name="factory_adress">

  </div>

  <div class="col-md-4">
    <label for="img1" class="form-label">تصویر1</label>
    <input class="form-control" type="file" id="img1" name="img1">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="description" name="description" placeholder="توضیحات را اینجا وارد کنید"></textarea>
  </div>

  <div class="col-md-4">
    <label for="phone" class="form-label">تلفن</label>
    <input type="tel" class="form-control" id="phone" name="phone">
  </div>

  <div class="col-md-4">
    <label for="phone1" class="form-label">1 تلفن</label>
    <input type="tel" class="form-control" id="phone1" name="phone1">
  </div>

  <div class="col-md-4">
    <label for="email" class="form-label">ایمیل</label>
    <input type="email" class="form-control" id="email" name="email">
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