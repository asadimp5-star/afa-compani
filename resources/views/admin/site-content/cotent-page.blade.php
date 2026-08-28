@extends('admin.layout.master-page')

@section('title','مدیریت محتوی')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page">مدیریت محتوی</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','مدیریت محتوی')

@section('content')
<style>
  .p1{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/content-image/images (1).jfif") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          width: 100%;
  }
  .p2{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/content-image/images.jfif") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          width: 100%;
  }
  .p3{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/content-image/images.png") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          width: 100%;
  }
  .p5{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/content-image/about-us.jpg") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          width: 100%;
  }
</style>
<section class="container-fluid">
 
<section class="container-fluid d-flex justify-content-center ">

<section class="container-fluid col-lg-8 col-md-10 col-sm-12 row mt-5 d-flex justify-content-around " style="margin:1rem;">
  <div class="col-lg-5 col-md-7 col-sm-7 p-2 "> 
    <div class="card shadow-sm rounded-4">
        <div class="col">
         @if ($first)
         <a href="{{ route('admin.content.first-page.edit',$first->id) }}">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg p1"> 
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"> 
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold sahel">مدیریت صفحه نخست</h3>
            </div> 
          </div>
          </a>
         @endif
          
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5 col-md-7 col-sm-7 p-2"> 
    <div class="card shadow-sm rounded-4">
        <div class="col">
          <a href="{{ route('admin.content.gallery') }}">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg proimg1 p2"> 
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"> 
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold sahel">گالری</h3>
            </div> 
          </div>
          </a>
          
        </div>
      </div>
    </div>
  </div>
</section>

</section>

<section class="container-fluid d-flex justify-content-center">

  <section class="container-fluid col-lg-8 col-md-10 col-sm-12 row mt-5 d-flex justify-content-around " style="margin:1rem;">
  <div class="col-lg-5 col-md-7 col-sm-7 p-2"> 
    <div class="card shadow-sm rounded-4">
        <div class="col">
          <a href="{{ route('admin.content.contact-us.edit',$contactUs->id) }}">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg proimg1 p3"> 
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"> 
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold sahel">ارتباط باما</h3>
            </div> 
          </div>
          </a>
          
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5 col-md-7 col-sm-7 p-2"> 
    <div class="card shadow-sm rounded-4">
        <div class="col">
          <a href="{{ route('admin.content.abouts.edit',$abouts->id) }}">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg proimg1 p5"> 
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"> 
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold sahel">درباره ما</h3>
            </div> 
          </div>
          </a>
          
        </div>
      </div>
    </div>
  </div>
</section>

</section>


</section>


@endsection


















