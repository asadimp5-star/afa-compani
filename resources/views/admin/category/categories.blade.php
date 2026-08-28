@extends('admin.layout.master-page')

@section('title','محصولات')

@section('produc','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page">لیست محصولات</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','لیست محصولات')

@section('content')
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
<section class="container-fluid">
  <section>
    <section class="mt-3 col-8 d-flex justify-content-center container-fluid">
            <div class="card bg-body-tertiary rounded-0 border-0 ">
                <a href="{{ route('admin.category.create') }}">
                  <div class="container-fluid col-lg-12 col-md-8  bg-primary rounded-3 text-center"style="margin-left:1rem;">
                  <div>
                  <div class="p-3"><h6 class=" shabnam" style="color: antiquewhite;">افزودن کالا جدید</h6></div>
            </div>
    
      </div>
    </a>
            </div>
        </section>
  </section>
<section class="container-fluid d-flex justify-content-center ">

<section class="container-fluid col-lg-8 col-md-10 col-sm-12 row mt-5 d-flex justify-content-around " style="margin:1rem;">
  <div class="col-lg-5 col-md-7 col-sm-7 p-2 "> 
    <div class="card shadow-sm rounded-4">
        <div class="col">
          <a href="{{ route('admin.category.car-wash.index') }}">
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
          <a href="{{ route('admin.category.wax.index') }}">
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
          <a href="{{ route('admin.category.floor.index') }}">
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
          <a href="{{ route('admin.category.M-floor.index') }}">
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


@endsection