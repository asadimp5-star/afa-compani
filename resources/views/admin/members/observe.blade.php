@extends('admin.layout.master-page')

@section('title','مشاهده مقاله')

@section('membe','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.users.user') }}">لیست اعضاء</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.users.show',$pos->user_Id) }}">مشخصات</a></li>
    <li class="breadcrumb-item p-1" aria-current="page">مشاهده مقاله</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','مشاهده مقاله')

@section('content')
<section class="yekan">
        <div class="col-md-6">
    <label for="title"  class="form-label d-block">عنوان*</label>
    <h4 class=" p-5 " >{{ $pos->title }}</h4>
    
  </div>
  <section class="col-3 justify-content-center">

    <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/postsImg/'. $pos->images0) }}" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="{{ $pos->title }}">
  
    </div>
    
   
 
 
 
  </section>
  <div class="mb-3 col-8">
    <label for="description" class="form-label">توضیحات</label>
    <p class="form-control"  >{{ $pos->description }}</p>
  </div>
  <section class="col-3 justify-content-center">

    <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/postsImg/'. $pos->images) }}" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="{{ $pos->title }}">
      
    </div>
    
 
  </section>
  <div class="mb-3 col-8">
    <label for="description1" class="form-label">1توضیحات</label>
    <p class="form-control">{{ $pos->description1 }}</p>
  </div>
  <section class="col-3 justify-content-center">

    <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/postsImg/'. $pos->images1) }}" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="{{ $pos->title }}">    
    </div>
    
 
 
  </section>
  <div class="mb-3 col-8">
    <label for="description2" class="form-label">توضیحات2</label>
    <p class="form-control">{{ $pos->description2 }}</p>
  </div>


</section>

  




  <div class="col-12 mt-1">
    <a class="btn btn-warning" href="{{ route('admin.users.show',$pos->user_Id) }}">بازگشت</a>
  </div>
</form>



@endsection