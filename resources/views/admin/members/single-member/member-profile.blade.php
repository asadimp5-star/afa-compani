@extends('admin.members.single-member.member-master')

@section('title','ویرایش پروفایل')

@section('profi','active')



@section('curent-page')
<x-manual.member-page-curent>
    <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page">ویرایش پروفایل</li>
    
  </x-slot>

</x-manual.member-page-curent>

@endsection

@section('page-name','ویرایش پروفایل')

@section('content')
<section class="d-flex col-lg-10 col-md-9 col-sm-11 row m-5">
  <section class="justify-content-between shabnam m-5">
    <section class="d-flex ">
      <div class="col-md-4 m-5">
    <label  class="form-label">نام</label>
    <h4>{{ Auth::user()->First_name }}</h4>
  </div>
  <div class="col-md-4 m-5">
    <label  class="form-label">نام خانوادگی</label>
    <h4>{{ Auth::user()->Last_name }}</h4>
  </div>
    </section> 
    <section class="d-flex">
      <div class="col-md-4 m-5">
    <label class="form-label">آدرس ایمیل</label>
    <h4>{{ Auth::user()->email }}</h4>
    
  </div>

  <div class="col-md-4 m-5">
    <label class="form-label">نوع فعالیت:</label>
    <h4>{{ Auth::user()->status== 1 ? "فعال" : "غیر فعال"  }}</h4>
    
  </div>
    </section>
  
  
  
  
 

</section>
<section class="d-flex justify-content-center row">
  <hr>
  <section class="d-flex justify-content-between col-lg-5 col-md-7 col-sm-9 m-5">

  <div>
  <a href="{{ route('admin.users.member-pass' , Auth::user()->id  ) }}" class="btn btn-info sahel">تغییر رمز</a>

  </div>
  
</section>

</section>
</section>
@endsection
>