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


<section class="d-flex justify-content-center mt-3">
    <section class="col-8 ">
      
      
        <table class="table caption-top">
  <!-- <caption>List of users</caption> -->
  <!-- <thead>
    <tr>
      <th scope="col" class="text-center vaziri fs-4">آرشیو مقالات</th>
   
    </tr>
  </thead> -->
  <tbody>
      
      
     
    <tr>
      <th scope="row">
        <section class="d-flex row p-2 ">
            <section class="p-1 d-flex col-lg-4 col-md-8 col-sm-10">
                 <div >
                        <div>
                           <img src="{{ asset('storage/catImge/'. $item->imags) }}" class="bd-placeholder-img card-img-top" height="100%" role="img" width="100%" alt="#">

                        </div> 
                            
              
                </div>
            </section>
            <section class="d-flex p-1 col-lg-7 col-md-8 col-sm-10">
                <div class="card-body "> 
                    <h3 class="shabnam fw-bold">{{ $item->title }}</h3> 
                    <label for="">کد محصول</label>
                    <h3 class="shabnam fw-bold">{{ $item->product_code }}</h3> 

                    <h5>ویژگی ها</h5>

                    <p class="card-text">{{ $item->description }}</p> 
                   
                   
                    <a href="{{ route('index.cuntactUs') }}" class="btn btn-outline-info mt-1">برای خرید تماس بگیرید</a>
                    
                  

                </div> 
            </section>
        </section>
        <section>
          <section class="m-5">
    <hr>
    <h2 class="shabnam text-center">نظرات</h2>
    <hr>
    <section>
  @forelse($item->comment as $comShow)
    @if ($comShow->status== 1)

    
    <div class="col-md-4">
    <label  class="form-label shabnam">نام</label>
    <h4 class="shabnam">{{ $comShow->name }}</h4>
    </div>
    <div class="col-md-4">
    <label  class="form-label shabnam">عنوان</label>
    <h4 class="shabnam">{{ $comShow->title }}</h4>
    </div>
  
    <div class="mb-3 col-8 mt-5 shabnam">
    <label class="form-label ">نظر</label>
    <p class="form-control ">{{ $comShow->description }}</p>
    </div>
    <div class="mb-3 col-8 shabnam">
    <label  class="form-label">پاسخ</label>
    <p class="form-control" >{{ $comShow->reply }}</p>
    </div>
    <hr>
    @endif 

  @empty
         <div>
            <h5 colspan="3">نظری وجود ندارد</h5>
         </div>
                
   
  @endforelse
                    
    </section>

</section>

        </section>
      </th>
     
    </tr>
    
      
  </tbody>
        </table>
        <hr>
        @if (session('success'))
      <section class="container-fluid d-flex justify-content-center">
        <div class="alert alert-primary col-6 text-center m-1" role="alert">
         <h6 class="yekan">{{session('success')}}</h6>
          
        </div>
      </section>

    @endif
        <section class="d-flex justify-content-center ">
    <section class="bg-success  rounded-2">
    <form class="row yekan  justify-content-center" action="{{ route('category.commentt') }}" method="post">
      @csrf

      <section class="d-flex row justify-content-center">
        <div class="col-md-4  p-1">
        <label for="title"  class="form-label d-block invalid">عنوان*</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        @error('title')
          <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
        <input type="hidden" class="form-control" id="cat_Id" name="cat_Id" value="{{ $item->id }}" required>

    
        </div>
        <div class="col-md-4  p-1">
        <label for="name"  class="form-label d-block invalid">نام و نام خانوادگی*</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
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
    <a class="btn btn-warning" href="{{ url()->previous() }}">بازگشت</a>

    </section>
</section>

@endsection