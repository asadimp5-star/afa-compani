@extends('front-client.layout.masterPage')

@section('title','خانه')

@section('hom','active')


@section('content')
<section class="bg-body">
  @foreach ($home as $item )



<section class="d-flex rounded-2 justify-content-center mt-5">
  <section class="mt-5 col-12 ">
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
 <div class="carousel-indicators mt-5">
 <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
 <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
 <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button> 
</div> 
<div class="carousel-inner">
  @if ($item->Fimg1)
    <div class="carousel-item">
    <div style="width: 100%; height: 50vh;">
       <img aria-hidden="true"  src="{{ asset('storage/first_page/'. $item->Fimg1) }}" class="d-block h-100 w-100 "  role="img" style="object-fit: cover; position: absolute;"  alt="#"> 
      <!-- <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>   -->
    </div>
   
<div class="container">
 <div class="carousel-caption text-start">
 <h1 class="vaziri mobilePic">با ما در ارتباط باشید</h1>
 <p class="opacity-75 yekan fs-3 mobilePic">از اینکه نظرات،پیشنهادات و استعلامات خود را با ما در میان میگذارید ممنونیم.</p>
 <p><a class="btn btn-lg btn-primary yekan" href="{{ route('index.cuntactUs') }}">تماس باما</a></p>
 </div>
 </div> 
</div>
  @endif
  
  @if ($item->Fimg2)
    <div class="carousel-item active"> 
<div style="width: 100%; height: 50vh;">
      <img aria-hidden="true" src="{{ asset('storage/first_page/'. $item->Fimg2) }}" class="d-block h-100 w-100"  role="img"   alt="#"> 
       
      <!-- <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>   -->
    </div>
<div class="container">
 <div class="carousel-caption">
 <h1 class="vaziri mobilePic">آگاهی ارزشمندترین ثروت است</h1> 
<p class="yekan fs-3 mobilePic">با خواندن مقالات به روز ما که توسط کارشناسان نگارش شده است، به روز شوید و آگاهی خود را افزایش دهید</p> 
<p><a class="btn btn-lg btn-primary yekan" href="{{ route('index.postse') }}">مجله فرتاک</a></p>
 </div>
 </div>
 </div>
  @endif

  @if ($item->Fimg3)
    <div class="carousel-item">
 <div style="width: 100%; height: 50vh;">
      <img aria-hidden="true" src="{{ asset('storage/first_page/'. $item->Fimg3) }}" class="d-block h-100 w-100"    role="img"  alt="#"> 
       
      <!-- <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>   -->
    </div> 
<div class="container"> 
<div class="carousel-caption text-end">
 <h1 class="vaziri mobilePic">از گالری دیدن کنید</h1> 
<p class="yekan fs-3 mobilePic">قبل از خرید هر چیزی ،حتی محصولات ما ،تحقیق کنید و نمونه کار را ببینید</p> 
<p><a class="btn btn-lg btn-primary yekan" href="{{ route('index.galarey') }}">ورود به گالری</a></p>
 </div> 
</div>
</div>
  @endif
 
</div> 
<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev"> 
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Previous</span>
 </button> 
<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next"> 
<span class="carousel-control-next-icon" aria-hidden="true"></span> 
<span class="visually-hidden">Next</span> </button>
    </div>
</section>
</section>



@if ($item->images0)
  <div class="p-4 p-md-5 mb-4  container-fluid rounded text-center  bg-body"> 
  <style>
  .p1{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("storage/first_page/". $item->images0) }}');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 40vh;
          width: 100%;
  }
  </style>   
<div class="px-0 col-12 p1 align-content-center rounded-5">
  <!-- <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1> -->
        <p class="lead my-3 vaziri text-warning fs-2">{{ $item->baner }}</p>
        <!-- <p class="lead mb-0"><a href="#" class="text-decoration-none fw-bold">Continue reading...</a></p> -->
 
 </div> 
</div>
@endif




<div class="container marketing">
 <!-- Three columns of text below the carousel --> 
<div class="row text-center">
 <div class="col-lg-3">
  <img src="{{ asset('storage/icons/299320.png') }}" class="w-50 h-50" alt="">
 <h4 class="fw-normal vaziri">شامپو کارواش</h4>
 <p>شامپو کارواش  در مجموعه ما،از مواد اولیه دست اول با فرمولاسیون روز دنیا و زیر نظر متخصصین کنترول کیفیت تولید شده </p>
 <p><a class="btn btn-secondary" href="{{ route('category.carwash') }}">دیدن محصولات »</a></p>
 </div>
 <div class="col-lg-3">
  <img src="{{ asset('storage/icons/floor-scrubber.jpg') }}" class="w-50 h-50" alt="">
 <h4 class="fw-normal vaziri">کفشوی مکانیزه</h4>
 <p>کفشوی تولیدی در این مجموعه دارای Ph خنثی بوده و علاوه بر تمیزی بالا، به ادوات اسکرابر هیچگونه صدمه ای نمیزند</p>
 <p><a class="btn btn-secondary" href="{{ route('category.Sfloor') }}">دیدن محصولات »</a></p>
 </div><!-- /.col-lg-4 -->
 <div class="col-lg-3">
 <img src="{{ asset('storage/icons/images.jfif') }}" class="w-50 h-50" alt="">
<h4 class="fw-normal vaziri">کفشوی دستی</h4> 
<p>کفشوی دستی با فرمولی نوین! بدون بو و غیر اسیدی که کف را بسیار تمیز میکند و هیچ ردی از طی نمی اندازد</p> 
<p><a class="btn btn-secondary" href="{{ route('category.Mfloor') }}">دیدن محصولات »</a></p> 
</div><!-- /.col-lg-4 -->
 <div class="col-lg-3">
 <img src="{{ asset('storage/icons/images.png') }}" class="w-50 h-50" alt="">
 <h4 class="fw-normal vaziri">واکس تایر</h4>
 <p>واکس تایر با کیفیت بالا که استفاده از آن باعث افزایش طول عمر تایر میگردد که بسیار ارازان قیمت و مقرون به صرفه است</p> 
<p><a class="btn btn-secondary" href="{{ route('category.waxTire') }}">دیدن محصولات »</a></p>
 </div><!-- /.col-lg-4 --> 
</div><!-- /.row --> <!-- START THE FEATURETTES -->
 <hr class="featurette-divider"> 
<div class="row featurette">
 <div class="col-md-7">
 <!-- <h2 class="featurette-heading fw-normal lh-1">First featurette heading. -->
 <!-- <span class="text-body-secondary">It’ll blow your mind.</span> -->
</h2> 
<p class="lead shabnam">{{ $item->description }}</p>
 </div>
 @if ($item->images)
    <div class="col-md-5"> 
<img aria-hidden="true"  src="{{ asset('storage/first_page/'. $item->images) }}" class="d-block h-100 w-100 "  role="img" style="object-fit: cover;"  alt="#"> 
 </div>
 @endif
 
 </div>
 <hr class="featurette-divider">
 <div class="row featurette"> 
<div class="col-md-7 order-md-2"> 
<!-- <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good.  -->
<!-- <span class="text-body-secondary">See for yourself.</span> -->
</h2>
 <p class="lead shabnam">{{ $item->description1 }}</p> 
</div>
@if ($item->images1)
<div class="col-md-5 order-md-1"> 
<img aria-hidden="true"  src="{{ asset('storage/first_page/'. $item->images1) }}" class="d-block h-100 w-100 "  role="img" style="object-fit: cover;"  alt="#">
 </div>
@endif
 
 </div> 
<hr class="featurette-divider">
<section class="p-5">
  <h4 class="shabnam d-block text-center mb-3">افتخارات و گواهی نامه ها</h4>
</section>
<section class="d-flex justify-content-center">

<div class="w3-content w3-section" style="max-width:20rem">
  <img class="mySlides" src="{{ asset('storage/glories/Ofogh Fartak Alborz International Co-ISO9001-QM5925151.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ asset('storage/glories/EIQM ISO LOGO NEW - IMS.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ asset('storage/glories/Ofogh Fartak Alborz International Co-ISO14001-QM5925152.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ asset('storage/glories/EIQM ISO LOGO NEW iso 14001-2015.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ asset('storage/glories/Ofogh Fartak Alborz International Co-ISO45001-QM5925153.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ asset('storage/glories/EIQM ISO LOGO NEW iso 45001-2018.jpg') }}" style="width:100%">
<br>
<br>
</div>


</section>

<hr class="featurette-divider">
 <div class="row featurette"> 
<div class="col-md-10 text-center">
 <!-- <h2 class="featurette-heading fw-normal lh-1">And lastly, this one.  -->
<!-- <span class="text-body-secondary">Checkmate.</span> -->
</h2> 
<p class="lead shabnam">{{ $item->description2 }}</p>
 </div>
 <div class="col-md-5">

 </div>
 </div>
 <hr class="featurette-divider"> 

</div>
  <!-- /END THE FEATURETTES -->

@endforeach
</section>


@endsection




    
        


 