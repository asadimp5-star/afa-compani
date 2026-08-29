<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/company-image/photo_2017-08-08_18-19-421.jpg') }}">

    <title>Document</title>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
 <div class="container-fluid"> 
<a class="navbar-brand" href="#">Carousel</a>
 <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> 
<span class="navbar-toggler-icon"></span>
 </button>
 <div class="navbar-collapse collapse" id="navbarCollapse">
 <ul class="navbar-nav me-auto mb-2 mb-md-0"> 
<li class="nav-item"> 
<a class="nav-link active" aria-current="page" href="#">Home</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#">Link</a>
 </li>
 <li class="nav-item"> 
<a class="nav-link disabled" aria-disabled="true">Disabled</a>
 </li> 
</ul> 
<form class="d-flex" role="search">
 <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
 <button class="btn btn-outline-success" type="submit">Search</button>
 </form>
 </div>
 </div> 
</nav>

</header>
<main>
    <section class="mt-5">
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
 <div class="carousel-indicators mt-5">
 <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
 <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
 <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button> 
</div> 
<div class="carousel-inner">
 <div class="carousel-item">
    <div style="width: 100%; height: 50vh;">
       <img aria-hidden="true"  src="{{ asset('storage/about-Img/38483ec0-7697-4dfd-ad01-0b216c7ea72d-1787651118.png') }}" class="d-block h-100 w-100 "  role="img" style="object-fit: cover; position: absolute;"  alt="#"> 
      <!-- <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>   -->
    </div>
    
 
    
 
<div class="container">
 <div class="carousel-caption text-start">
 <h1>Example headline.</h1>
 <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
 <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
 </div>
 </div> 
</div> 
<div class="carousel-item active"> 
<div style="width: 100%; height: 50vh;">
      <img aria-hidden="true" src="{{ asset('storage/contact-Img/1181f4e9-4738-46ac-9b82-b2f5efb7aeca-1787763362.png') }}" class="d-block h-100 w-100"  role="img"   alt="#"> 
       
      <!-- <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>   -->
    </div>
<div class="container">
 <div class="carousel-caption">
 <h1>Another example headline.</h1> 
<p>Some representative placeholder content for the second slide of the carousel.</p> 
<p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
 </div>
 </div>
 </div>
 <div class="carousel-item">
 <div style="width: 100%; height: 50vh;">
      <img aria-hidden="true" src="{{ asset('storage/postsImg/3c3af98b-59ea-4578-a0a0-bffe3c37bd29-1786380521.jpg') }}" class="d-block h-100 w-100"    role="img"  alt="#"> 
       
      <!-- <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>   -->
    </div> 
<div class="container"> 
<div class="carousel-caption text-end">
 <h1>One more for good measure.</h1> 
<p>Some representative placeholder content for the third slide of this carousel.</p> 
<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
 </div> 
</div>
</div>
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



<div class="p-4 p-md-5 mb-4  container-fluid rounded text-center  bg-body-secondary"> 
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
<div class="px-0 col-12 p1 align-content-center text-info">
  <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        <p class="lead mb-0"><a href="#" class="text-decoration-none fw-bold">Continue reading...</a></p>
 
 </div> 
</div>



<div class="container marketing">
 <!-- Three columns of text below the carousel --> 
<div class="row text-center">
 <div class="col-lg-4">
  <img src="{{ asset('storage/icons/299320.png') }}" class="w-50 h-50" alt="">
 <h2 class="fw-normal">Heading</h2>
 <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
 <p><a class="btn btn-secondary" href="#">View details »</a></p>
 </div><!-- /.col-lg-4 -->
 <div class="col-lg-4">
 <img src="{{ asset('storage/icons/images.jfif') }}" class="w-50 h-50" alt="">
<h2 class="fw-normal">Heading</h2> 
<p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p> 
<p><a class="btn btn-secondary" href="#">View details »</a></p> 
</div><!-- /.col-lg-4 -->
 <div class="col-lg-4">
 <img src="{{ asset('storage/icons/images.png') }}" class="w-50 h-50" alt="">
 <h2 class="fw-normal">Heading</h2>
 <p>And lastly this, the third column of representative placeholder content.</p> 
<p><a class="btn btn-secondary" href="#">View details »</a></p>
 </div><!-- /.col-lg-4 --> 
</div><!-- /.row --> <!-- START THE FEATURETTES -->
 <hr class="featurette-divider"> 
<div class="row featurette">
 <div class="col-md-7">
 <h2 class="featurette-heading fw-normal lh-1">First featurette heading.
 <span class="text-body-secondary">It’ll blow your mind.</span>
</h2> 
<p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
 </div>
 <div class="col-md-5"> 
<img aria-hidden="true"  src="{{ asset('storage/postsImg/be765f60-4141-4ec3-a419-4c2dbd8e7d64-1786475459.jpg') }}" class="d-block h-100 w-100 "  role="img" style="object-fit: cover;"  alt="#"> 
 </div>
 </div>
 <hr class="featurette-divider">
 <div class="row featurette"> 
<div class="col-md-7 order-md-2"> 
<h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. 
<span class="text-body-secondary">See for yourself.</span>
</h2>
 <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p> 
</div>
 <div class="col-md-5 order-md-1"> 
<img aria-hidden="true"  src="{{ asset('storage/postsImg/$2y$12$MfjYHHhghbRLl36RTKv8nOqdQJLQdFyG4b5KwTw1dLid3A0RyOoYG.jpg') }}" class="d-block h-100 w-100 "  role="img" style="object-fit: cover;"  alt="#">
 </div>
 </div> 
<hr class="featurette-divider">
 <div class="row featurette"> 
<div class="col-md-10 text-center">
 <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. 
<span class="text-body-secondary">Checkmate.</span>
</h2> 
<p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
 </div>
 <div class="col-md-5">

 </div>
 </div>
 <hr class="featurette-divider"> 

    </div>
  <!-- /END THE FEATURETTES -->
</main>

    
        
<footer class="container">
 <p class="float-end"><a href="#">Back to top</a></p>
 <p>© 2017–2025 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p> 
</footer>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/app.js') }}"></script>
</body>
</html>