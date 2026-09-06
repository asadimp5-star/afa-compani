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


<section class="d-flex justify-content-center mt-3">
    <section class="col-8 ">
      
      
        <table class="table caption-top">
  <!-- <caption>List of users</caption> -->
  <thead>
    <tr>
      <th scope="col" class="text-center vaziri fs-4">آرشیو مقالات</th>
   
    </tr>
  </thead>
  <tbody>
      @foreach ($poste as $item)
      @if ($item->status == 1)
      
     
    <tr>
      <th scope="row">
        <section class="d-flex row p-2 ">
            <section class="p-1 d-flex col-lg-4 col-md-8 col-sm-10">
                 <div >
                  @if($item->images0)
                    <a href="{{ route('index.post',$item->slug) }}">
                       <div>
                        <img src="{{ asset('storage/postsImg/'.$item->images0) }}" class="bd-placeholder-img card-img-top" height="100%" role="img" width="100%" alt="#">

                        </div> 
                    </a>         
                    @endif
                </div>
            </section>
            <section class="d-flex p-1 col-lg-7 col-md-8 col-sm-10">
                <div class="card-body "> 
                    <h4 class="shabnam fw-bold">{{ $item->title }}</h4> 

                    <p class="card-text">{{substr($item->description,0,100).'...'}}</p> 

                    <a href="{{ route('index.post',$item->slug) }}" class="btn btn-outline-info mt-1">بیشتر بخوانید...</a>


                </div> 
            </section>
        </section>
      </th>
    </tr>
     @endif
      @endforeach
      
  </tbody>
        </table>
<div class="col-3 pe-5">{{ $poste->links() }}</div>
    </section>
</section>



@endsection