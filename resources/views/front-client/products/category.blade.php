@extends('front-client.layout.masterPage')

@section('title','محصولات')

@section('proud','active')

@section('content')



<section class="d-flex justify-content-center">
  <section class="mt-5 col-10">
    <div class="p-md-5 container-fluid rounded text-center  bg-body-secondary"> 
  <style>
  .p6{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/content-image/admin-ajax.png") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 40vh;
          width: 100%;
  }
  </style>   
<div class="px-0 col-12 p6 rounded-2 align-content-center text-warning">
  <h1 class="display-4 fst-italic vaziri">محصولات</h1>
        <!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p> -->
 </div> 
</div>
</section>
</section>

<style>
  .p1{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/products-image/mintosko-V4b2j7f1dfc-unsplash.jpg") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          width: 100%;
  }
  .p2{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/products-image/images.jfif") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          width: 100%;
  }
  .p3{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/products-image/istockphoto-1016698034-1024x1024.png") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          width: 100%;
  }
  .p5{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/products-image/istockphoto-516506357-1024x1024.png") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          width: 100%;
  }
</style>

<section>
    <section class="container-fluid">
        <section class="container-fluid d-flex justify-content-center ">

<section class="container-fluid col-lg-8 col-md-10 col-sm-12 row mt-5 d-flex justify-content-around " style="margin:1rem;">
  <div class="col-lg-5 col-md-7 col-sm-7 p-2 "> 
    <div class="card shadow-sm rounded-4">
        <div class="col">
          <a href="{{ route('category.carwash') }}">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg p1"> 
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"> 
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold sahel">شامپو کارواش</h3>
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
          <a href="{{ route('category.waxTire') }}">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg proimg1 p2"> 
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"> 
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold sahel">واکس تایر</h3>
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
          <a href="{{ route('category.Sfloor') }}">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg proimg1 p3"> 
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"> 
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold sahel">کفشوی مکانیزه</h3>
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
          <a href="{{ route('category.Mfloor') }}">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg proimg1 p5"> 
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"> 
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold sahel">کفشوی دستی</h3>
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
</section>



@endsection