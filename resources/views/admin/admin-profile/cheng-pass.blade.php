@extends('admin.layout.master-page')

@section('title','ویرایش پروفایل')

@section('seting','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.settings.show') }}">ویرایش پروفایل</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">تغییر رمز</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','تغییر رمز ')

@section('content')

<section class="d-flex col-lg-8 col-md-9 col-sm-11 m-5">
  <form action="{{ route('admin.users.user-passs',  $user->id ) }}" class="col-9 shabnam" method="post">
    @csrf
    @method('PUT')
    <div >
    <label  class="form-label fs-3">تغییر رمز</label>
    <div class="col-md-6 col-lg-8 col-sm-11">
    <label for="password" class="form-label">گذرواژه جدید</label>
    <input type="password" class="form-control" name="password" required>
    @error('password')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-6 col-lg-8 col-sm-11">
    <label for="password_confirmation" class="form-label">تکرار گذرواژه</label>
    <input type="password" class="form-control" name="password_confirmation" required>
    @error('password_confirmation')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    <div class="col-12">
    <button class="btn btn-primary" type="submit">ثبت</button>
    </div>
    <div class="col-12">
    </div>
  </form>
    <a class="btn btn-warning mt-3" href="{{ route('admin.settings.show') }}">بازگشت</a>

</section>

@endsection