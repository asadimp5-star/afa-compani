@extends('admin.layout.master-page')

@section('title','افزودن اعضاء')

@section('membe','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.users.user') }}">لیست اعضاء</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">افزودن اعضاء</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','افزودن اعضاء')

@section('content')

<section class="m-5">
    
    <section>
  <form class="row g-3 yekan" action="{{ route('admin.users.store') }}" method="post">
    @csrf
  <div class="col-md-4">
    <label for="First_name" class="form-label">نام</label>
    <input type="text" class="form-control" name="First_name" value="{{ old('First_name') }} "required>
    @error('First_name')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
    <label for="Last_name" class="form-label">نام خانوادگی</label>
    <input type="text" class="form-control" name="Last_name" value="{{ old('Last_name') }}" required>
    @error('Last_name')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
  <label for="email" class="form-label">ایمیل</label>
  <input class="form-control" type="email"   name="email" value="{{ old('email') }}" required>
  @error('email')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-4">
    <label for="password" class="form-label">گذرواژه</label>
    <input type="password" class="form-control" name="password" required>
    @error('password')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4">
    <label for="password_confirmation" class="form-label">تکرار گذرواژه</label>
    <input type="password" class="form-control" name="password_confirmation" required>
    @error('password_confirmation')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>


  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">ثبت</button>
  </div>
  <div class="col-12">
    <a class="btn btn-warning" href="{{ route('admin.users.user') }}">بازگشت</a>
  </div>
</form>
    </section>

</section>

@endsection