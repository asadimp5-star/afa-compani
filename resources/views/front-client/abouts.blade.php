@extends('front-client.layout.masterPage')

@section('title','درباره ما')

@section('abouts','active')

@section('content')

<section class="d-flex justify-content-center">
  <section class="mt-5 col-10">
    <div class="p-md-5 container-fluid rounded text-center  bg-body-secondary"> 
  <style>
  .p1{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("storage/postsImg/3974da88-b238-4f9b-805a-854dd31fb06a-1786380270.jpg") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 40vh;
          width: 100%;
  }
  </style>   
<div class="px-0 col-12 p1 rounded-2 align-content-center text-info">
  <h1 class="display-4 fst-italic yekan">درباره ما</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
 </div> 
</div>
</section>
</section>



<section>

  <div class="text-center d-flex justify-content-center mb-3">
    <div class="col-md-4 ">
    <h1 class="shabnam fw-bold">شرکت بین المللی افق فرتاک البرز</h1>
    </div>
  </div>
  
    <div class="d-flex justify-content-center">

        <div class="col-lg-3 col-md-6 col-sm-8">
          <img src="{{ asset('storage/about-Img/38483ec0-7697-4dfd-ad01-0b216c7ea72d-1787651118.png') }}" class="bd-placeholder-img card-img-top" height="100%" role="img" width="50%" alt="#">

        </div>
    
    </div>



    <div class="m-5 d-flex justify-content-center">
        <div class="mb-3  col-8">
           <p class="sahel">توضیحات اولیه برای شرکت</p>
        </div>
    </div>
    

    <div class="d-flex justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-8">
           <img src="{{ asset('storage/about-Img/522692b7-dba5-4703-a521-6c0e635ba29d-1787650982.png') }}" class="bd-placeholder-img card-img-top " height="100%" role="img" width="50%" alt="#"> 

        </div>
    </div>
  
  <div class="m-5 d-flex justify-content-center">
    <div class="mb-3 col-8">
    <p class="sahel">ادامه توضیحات درباره شرکت</p>
  </div>
  </div>
  

  
  


  
  
 

</section>

@endsection