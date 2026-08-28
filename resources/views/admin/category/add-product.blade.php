@extends('admin.layout.master-page')

@section('title','افزودن کالا')

@section('produc','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.category.index') }}">لیست کالا</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">افزودن کالا</li>
  </x-slot>
</x-manual.page-curent>
@endsection


@section('page-name','افزودن کالا')

@section('content')



<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
      @csrf
  <div class="col-md-4">
    <label for="title" class="form-label">عنوان</label>
    <input type="text" class="form-control" id="title" name="title" required>
    @error('title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
    <label for="product_code" class="form-label">کد محصول</label>
    <input type="text" class="form-control" id="product_code" name="product_code" required>
    @error('product_code')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
  <label for="imags" class="form-label">تصویر</label>
  <input class="form-control" type="file" id="imags" name="imags">
  @error('imags')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
</div>
<section class="d-flex">
  <div class="col-md-2">
    <select class="form-select" name="product_type" required aria-label="select example">
      <option value="">نوع کالا را انتخاب کنید</option>
      <option value="0" {{ old('product_type')=='0'?'selected':'' }}>شامپو کارواش</option>
      <option value="1" {{ old('product_type')=='1'?'selected':'' }}>واکس تایر</option>
      <option value="2" {{ old('product_type')=='2'?'selected':'' }}>مایع کف شوی مکانیزه</option>
      <option value="3" {{ old('product_type')=='3'?'selected':'' }}>مایع کف شوی دستی</option>
    </select>
    @error('product_type')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

</section>

  <div class="mb-3">
    <label for="description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="description" name="description" placeholder="توضیحات درباره کالا را اینجا وارد کنید" required></textarea>
    @error('description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  
  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">ثبت کالا</button>
  </div>
  <div class="col-12">
    <a class="btn btn-warning" href="{{ route('admin.category.index') }}">بازگشت</a>
  </div>
</form>
    </section>

</section>













@endsection