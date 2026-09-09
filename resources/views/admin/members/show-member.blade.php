@extends('admin.layout.master-page')

@section('title','مشخصات')

@section('membe','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.users.user') }}">لیست اعضاء</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">مشخصات</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','مشخضات')

@section('content')

<section>


    <section class="m-5">
    
<section class="d-flex justify-content-between p-4 col-lg-7 col-md-9 col-sm-11 row">
    
  <div class="col-md-4 mt-2">
    <label  class="form-label">نام</label>
    <h4>{{ $user->First_name }}</h4>
  </div>
  <div class="col-md-4 mt-2">
    <label  class="form-label">نام خانوادگی</label>
    <h4>{{ $user->Last_name }}</h4>
  </div>
  
  <div class="col-md-4 mt-2">
    <label class="form-label">آدرس ایمیل</label>
    <p>{{ $user->email }}</p>
  </div>
  
  <div class="mt-2">

     <a href="{{ route('admin.users.member-email' , $user->id  ) }}" class="btn btn-info sahel">تغییر آدرس ایمیل</a>
  

  </div>
 

</section>

<section>
  <table class="table table-striped table-hover mt-5">
  <thead>
    <tr class="shabnam fs-6">
      <th scope="col">#</th>
      <th scope="col">عنوان</th>
      <th scope="col">خلاصه</th>
      <th scope="col">تاریخ</th>
      <th scope="col">وضعیت</th>
      <th scope="col">مشاهده</th>
    </tr>
  </thead>
  <tbody>
    @forelse($user->post as $pos)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{substr($pos->title,0,10).'...'}}</td>
      <td>{{ substr($pos->description,0,20).'...' }}</td>
      
      <td>{{ $pos->created_at }}</td>
      <td>{{ ($pos->status== 1 ? 'فعال' : 'غیر فعال')  }}</td>
      <td><a href="{{ route('admin.users.edit',$pos->slug) }}" class="btn btn-outline-primary m-1">مشاهده </a></td>
      <td>
        
                              
      </td>
    </tr>
    @empty
    <h6>مقاله ای وجود ندارد</h6>
    @endforelse
  </tbody>
</table>
</section>

 <div class="col-12">
    <a class="btn btn-warning" href="{{ route('admin.users.user') }}">بازگشت</a>
  </div>
 </section>


</section>








@endsection