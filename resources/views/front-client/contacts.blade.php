@extends('front-client.layout.masterPage')

@section('title','تماس باما')

@section('contacts','active')

@section('content')


<section class="d-flex justify-content-center" >
  <section class="mt-5 col-10">
    <div class="p-md-5 container-fluid rounded text-center  bg-body-secondary"> 
  <style>
  .p1{
    background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url('{{ asset("assets/company-image/content-image/pexels-alex-andrews-821754.jpg") }}');
          background-position: center;
          background-repeat: repeat-x;
          background-size: cover;
          height: 40vh;
          width: 100%;
  }
  </style>   
<div class="px-0 col-12 p1 rounded-2 align-content-center text-warning">
  <h1 class="display-4 fst-italic vaziri">تماس باما</h1>
        <!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p> -->
 </div> 
    </div>
</section>
</section>

      
@if (session('successe'))
      <section class="container-fluid d-flex justify-content-center">
        <div class="alert alert-success col-6 text-center m-1" role="alert">
         <h6 class="yekan">{{session('successe')}}</h6>
          
        </div>
      </section>

    @endif

<section class="container-fluid">
    @foreach ($contact as $item)
    
  <div class="text-center d-flex justify-content-center mb-3">
    <div class="col-md-4 mt-2 ">
        <label for="co_adress">آدرس شرکت:</label>
    <h4 class="shabnam fw-bold">{{ $item->co_adress }}</h4>
    </div>
  </div>
  <div class="m-5 text-center d-flex justify-content-center">
        <div class="mb-3  col-8">
        <label for="factory_adress">آدرس کارگاه:</label>
        <h4 class="sahel">{{ $item->factory_adress }}</h4>
        </div>
    </div>
    
    <div class="d-flex justify-content-center">

        <div class="col-lg-3 col-md-6 col-sm-8">
          <img src="{{ asset('storage/contact-Img/'. $item->img) }}" class="bd-placeholder-img card-img-top" height="100%" role="img" width="50%" alt="#">

        </div>
    
    </div>


    <div class="m-5 d-flex justify-content-center">
    <div class="mb-3 col-8">
    <p class="sahel">{{ $item->description }}</p>
    </div>
    </div>

    

    <div class="d-flex justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-8">
           <img src="{{ asset('storage/contact-Img/'. $item->img1) }}" class="bd-placeholder-img card-img-top " height="100%" role="img" width="50%" alt="#"> 

        </div>
    </div>
    <section class="d-flex row col-5 justify-content-center">
      <section class="row  d-flex">
    <div class="m-5 d-flex col-lg-4 col-md-5 col-sm-8   justify-content-center">
        <div class="mb-1">
        <label for="phone">تلفن :</label>
        <h4 class="sahel">{{ $item->phone }}</h4>
        </div>
    </div>
    <div class="m-5 d-flex  col-lg-4 col-md-5 col-sm-8 justify-content-center">
        <div class="mb-1 ">
        <label for="phone1">تلفن :</label>
        <h4 class="sahel">{{ $item->phone1 }}</h4>
        </div>
    </div>
    <div class="m-5 d-flex col-lg-4 col-md-5 col-sm-8 justify-content-center">
        <div class="mb-1">
        <label for="email">ایمیل :</label>
        <h4 class="sahel">{{ $item->email }}</h4>
        </div>
    </div>

  </section> 
    @endforeach

    </section>
  
  <hr>
    @if (session('success'))
      <section class="container-fluid d-flex justify-content-center">
        <div class="alert alert-success col-6 text-center m-1" role="alert">
         <h6 class="yekan">{{session('success')}}</h6>
          
        </div>
      </section>

    @endif
     
  <section class="d-flex justify-content-center ">
    <section class="bg-warning  rounded-2">
    <form class="row yekan  justify-content-center" action="{{ route('index.cuntactUs1') }}" method="post">
      @csrf

      <section class="d-flex row justify-content-center">
        <div class="col-md-4  p-1">
        <label for="title"  class="form-label d-block invalid">عنوان*</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        @error('title')
          <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    
        </div>
        <div class="col-md-4  p-1">
        <label for="full_name"  class="form-label d-block invalid">نام و نام خانوادگی*</label>
        <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}" required>
        @error('full_name')
        <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    
        </div>


      </section>
  
  <section class="d-flex row justify-content-center">
    <div class="col-md-4 p-1">
    <label for="phone"  class="form-label d-block invalid">تلفن</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" >
    @error('phone')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>

   <div class="col-md-4 p-1">
    <label for="email"  class="form-label d-block invalid">ایمیل</label>
    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" >
    @error('email')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>
  </section>
   
  

 
  <div class="mb-3 col-8 ">
    <label for="description" class="form-label">توضیحات</label>
    <textarea class="form-control" name="description" placeholder="پیام خود را اینجا وارد کنید"></textarea>
    @error('description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  
  
  <div class="col-8 mt-3 ">
    <button class="btn btn-primary" type="submit">ارسال پیام</button>
  </div>
 
</form>
    </section>
  </section>
    

</section>

@endsection