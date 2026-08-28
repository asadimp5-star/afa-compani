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
  <div class="col-md-4">
    <label for="title" class="form-label">عنوان</label>
    <input type="text" class="form-control" id="title" name='title'>
  </div>
  <div class="col-md-4">
    <label for="images0" class="form-label">تصویر</label>
    <input class="form-control" type="file" id="images0" name="images0">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="description" name="description" placeholder="توضیحات  را اینجا وارد کنید"></textarea>
  </div>

  <div class="col-md-4">
    <label for="images" class="form-label">تصویر1</label>
    <input class="form-control" type="file" id="images" name="images">
  </div>

  <div class="mb-3">
    <label for="description1" class="form-label">توضیحات</label>
    <textarea class="form-control" id="description1" name="description1" placeholder="توضیحات را اینجا وارد کنید"></textarea>
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