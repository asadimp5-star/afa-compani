@extends('front-client.layout.masterPage')

@section('title','مجله فرتاک ')

@section('pos','active')

@section('content')


<section class="d-flex justify-content-center" >
  <section class="mt-5 col-10">
    <div class="p-md-5 container-fluid rounded text-center  bg-body-secondary"> 
  <style>
  .p1{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/content-image/pexels-ylanite-koppens-796602.jpg") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 40vh;
          width: 100%;
  }
  </style>   
<div class="px-0 col-12 p1 rounded-2 align-content-center text-warning">
  <h1 class="display-4 fst-italic yekan">مجله فرتاک</h1>
        <!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p> -->
 </div> 
    </div>
</section>
</section>

<section class="container-fluid mt-4 d-flex justify-content-center">
    <section class="col-10">
              
  <div class="col-md-6 mb-4 d-flex justify-content-center">
    <h1 class="vaziri">{{$item->title}}</h1>
    
  </div>
  <section class="col-10 p-3 d-flex justify-content-center">
  @if ($item->images0)
  <div class="card shadow-sm mt-2 " > 
      <img src="{{ asset('storage/postsImg/'. $item->images0) }}" class="bd-placeholder-img card-img-top rounded-3" height="300" role="img" width="100%" alt="#">

       
    </div>
  @endif
  
    

 
  </section>

  <div class="m-3 col-8 p-5">
    <p class="shabnam">{{ $item->description }}</p>
  </div>
  <section class="col-10 p-3 d-flex justify-content-center">
  @if ($item->images)
  <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/postsImg/'.$item->images ) }}" class="bd-placeholder-img card-img-top rounded-3" height="225" role="img" width="100%" alt="#">

            
    </div>
  @endif
  
    
 
  </section>

  <div class="m-3 p-5 col-8 ">
    <p class="shabnam">{{ $item->description1 }}</p>
  </div>

  <section class="col-10 p-3 d-flex justify-content-center">
 @if ($item->images1)
 <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/postsImg/'. $item->images1) }}" class="bd-placeholder-img card-img-top rounded-3" height="225" role="img" width="100%" alt="#">
    </div>
 @endif
  

  </section>

  <div class="m-3 col-8 p-5">
    <p class="shabnam">{{ $item->description2 }}</p>
  </div>
  

  <div class="col-4 mt-1 d-flex justify-content-center">
    <a class="btn btn-warning" href="{{ route('index.postse') }}">بازگشت</a>
  </div>

    </section>
</section>


@endsection