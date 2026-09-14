
<header class="mb-4">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top sahel rounded-1 bg-primary">
 <div class="container-fluid"> 
<a class="navbar-brand d-flex" href="{{ route('index.home') }}">
        <img  src="{{ asset('assets/company-image/photo_2017-08-08_18-19-421.jpg') }}" class="m-2 img-thumbnail" alt="image logo" width="60" height="40"> 
        <h4 class="sahel d-flex align-items-center">{{ __('content.logoName') }}</h4>

</a>
 <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> 
<span class="navbar-toggler-icon"></span>
 </button>
 <div class="navbar-collapse collapse" id="navbarCollapse">
 <ul class="navbar-nav me-auto mb-2 mb-md-0"> 
<li class="nav-item"> 
<a class="nav-link @yield('hom')" aria-current="page" href="{{ route('index.home') }}">{{ __('content.home') }}</a>
 </li>
<li class="nav-item"> 
<a class="nav-link @yield('proud')" aria-current="page" href="{{ route('category.home') }}">{{ __('content.products') }}</a>
 </li>
 <li class="nav-item">
 <a class="nav-link @yield('pos')" href="{{ route('index.postse') }}">{{ __('content.magazin') }}</a>
 </li>
 <li class="nav-item">
 <a class="nav-link @yield('gallar')" href="{{ route('index.galarey') }}">{{ __('content.gallary') }}</a>
 </li>
  <li class="nav-item">
 <a class="nav-link @yield('abouts')" href="{{ route('index.aboutUs') }}">{{ __('content.about') }}</a>
 </li>
  <li class="nav-item">
 <a class="nav-link @yield('contacts')" href="{{ route('index.cuntactUs') }}">{{ __('content.contact') }}</a>
 </li>
 </ul>

<div class="btn-group btn-group-sm">
@php
      $segment = request()->segments();
      if(in_array($segment[0]??'',['fa','en'])){
      array_shift($segment);
      }
        $path = implode('/',$segment);
     
    @endphp
    <a class="btn btn-primary text-warning" href="{{ url('/fa/' . $path) }}">فارسی</a>
    <a class="btn btn-primary text-warning" href="{{ url('/en/' . $path) }}">English</a>
  
</div>

 </div>
 </div> 
</nav>

</header>