@extends('front-client.layout.masterPage')

@section('title','درباره ما')

@section('abouts','active')

@section('content')

<section class="d-flex justify-content-center">
  <section class="mt-5 col-10">
    <div class="p-md-5 container-fluid rounded text-center  bg-body-secondary"> 
  <style>
  .p1{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/content-image/about-us.jpg") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 40vh;
          width: 100%;
  }
  </style>   
<div class="px-0 col-12 p1 rounded-2 align-content-center text-warning">
  <h1 class="display-4 fst-italic vaziri">درباره ما</h1>
        <!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p> -->
 </div> 
</div>
</section>
</section>



<section>
  @foreach ($aboute as $item) 

  <div class="text-center d-flex justify-content-center mb-3">
    <div class="col-md-4 ">
    <h1 class="shabnam fw-bold" >{{ $item->title }}</h1>
    </div>
  </div>
  
    <div class="d-flex justify-content-center">

        <div class="col-lg-3 col-md-6 col-sm-8">
          <img src="{{ asset('storage/about-Img/'. $item->images0) }}" class="bd-placeholder-img card-img-top" height="100%" role="img" width="50%" alt="#">

        </div>
    
    </div>



    <div class="m-5 d-flex justify-content-center">
        <div class="mb-3  col-8">
           <p class="sahel" >{{ $item->description }}</p>
        </div>
    </div>
    

    <div class="d-flex justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-8">
           <img src="{{ asset('storage/about-Img/'. $item->images) }}" class="bd-placeholder-img card-img-top " height="100%" role="img" width="50%" alt="#"> 

        </div>
    </div>
  
  <div class="m-5 d-flex justify-content-center">
    <div class="mb-3 col-8">
    <p class="sahel" >{{ $item->description1 }}</p>
  </div>
  </div>
  

  
  


  
  
  @endforeach


</section>

@endsection