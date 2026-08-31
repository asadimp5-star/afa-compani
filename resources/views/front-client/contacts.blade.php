@extends('front-client.layout.masterPage')

@section('title','تماس باما')

@section('contacts','active')

@section('content')


<section class="d-flex justify-content-center" >
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
  <h1 class="display-4 fst-italic yekan">تماس باما</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
 </div> 
    </div>
</section>
</section>



<section class="container-fluid">

  <div class="text-center d-flex justify-content-center mb-3">
    <div class="col-md-4 mt-2 ">
        <label for="co_adress">آدرس شرکت:</label>
    <h4 class="shabnam fw-bold">کرج،....</h4>
    </div>
  </div>
  <div class="m-5 text-center d-flex justify-content-center">
        <div class="mb-3  col-8">
        <label for="factory_adress">آدرس کارگاه:</label>
        <h4 class="sahel">نظرآباد،...</h4>
        </div>
    </div>
    
    <div class="d-flex justify-content-center">

        <div class="col-lg-3 col-md-6 col-sm-8">
          <img src="{{ asset('storage/about-Img/38483ec0-7697-4dfd-ad01-0b216c7ea72d-1787651118.png') }}" class="bd-placeholder-img card-img-top" height="100%" role="img" width="50%" alt="#">

        </div>
    
    </div>


    <div class="m-5 d-flex justify-content-center">
    <div class="mb-3 col-8">
    <p class="sahel">ادامه توضیحات درباره شرکت</p>
    </div>
    </div>

    

    <div class="d-flex justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-8">
           <img src="{{ asset('storage/about-Img/522692b7-dba5-4703-a521-6c0e635ba29d-1787650982.png') }}" class="bd-placeholder-img card-img-top " height="100%" role="img" width="50%" alt="#"> 

        </div>
    </div>
    <section class="d-flex row col-5 justify-content-center">
      <section class="row  d-flex">
    <div class="m-5 d-flex col-lg-4 col-md-5 col-sm-8   justify-content-center">
        <div class="mb-1">
        <label for="phone">تلفن :</label>
        <h4 class="sahel">09121111</h4>
        </div>
    </div>
    <div class="m-5 d-flex  col-lg-4 col-md-5 col-sm-8 justify-content-center">
        <div class="mb-1 ">
        <label for="phone1">تلفن :</label>
        <h4 class="sahel">0263280022</h4>
        </div>
    </div>
    <div class="m-5 d-flex col-lg-4 col-md-5 col-sm-8 justify-content-center">
        <div class="mb-1">
        <label for="email">ایمیل :</label>
        <h4 class="sahel">a@t.com</h4>
        </div>
    </div>

  </section>  
    </section>
  
  <hr>

  <section class="d-flex justify-content-center ">
    <section class="bg-warning  rounded-2">
    <form class="row yekan  justify-content-center" action="#" method="post">
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