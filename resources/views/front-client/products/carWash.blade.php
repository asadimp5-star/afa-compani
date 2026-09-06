@extends('front-client.layout.masterPage')

@section('title','محصولات')

@section('proud','active')

@section('content')



<section class="d-flex justify-content-center">
  <section class="mt-5 col-10">
    <div class="p-md-5 container-fluid rounded text-center  bg-body-secondary"> 
  <style>
  .p1{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/products-image/mintosko-V4b2j7f1dfc-unsplash.jpg") }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 40vh;
          width: 100%;
  }
  </style>   
<div class="px-0 col-12 p1 rounded-2 align-content-center text-warning">
  <h1 class="display-4 fst-italic vaziri">شامپو کارواش</h1>
        <!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p> -->
 </div> 
</div>
</section>
</section>



<section class="d-flex justify-content-center">
   
 <section class="d-flex  col-10 row mt-3">
@foreach ($catshow as $item )

@if ($item->product_type == 0)
@if ($item->status== 1)

<div class="col-lg-3 col-md-6 col-ms-10 ">
 <div class="card shadow-sm col-10">
    <img src="{{ asset('storage/catImge/'. $item->imags) }}" class="" height="100%" role="img" width="100%" alt="#">
 
<div class="card-body"> 
    <h6 class="yekan fs-5">{{$item->title}}</h6> 

<p class="card-text yekan">{{ substr($item->description,0,60).'...' }}</p> 
  <a href="{{ route('category.showProduct',$item->slug) }}" class="btn btn-outline-info mt-1">مشاهده بیشتر...</a>

 </div> 
</div>
 </div> 
@endif

@endif
 
@endforeach

 
</section>   
    

</section>


<a class="btn btn-warning m-5  " href="{{ route('category.home') }}">بازگشت</a>

@endsection