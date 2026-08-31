
<header class="mb-4">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top sahel rounded-1 bg-primary">
 <div class="container-fluid"> 
<a class="navbar-brand d-flex" href="{{ route('index.home') }}">
        <h4 class="sahel d-flex align-items-center">شرکت بین المللی افق فرتاک البرز</h4>
        <img  src="{{ asset('assets/company-image/photo_2017-08-08_18-19-421.jpg') }}" class="m-2 img-thumbnail" alt="image logo" width="60" height="40"> 
</a>
 <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> 
<span class="navbar-toggler-icon"></span>
 </button>
 <div class="navbar-collapse collapse" id="navbarCollapse">
 <ul class="navbar-nav me-auto mb-2 mb-md-0"> 
<li class="nav-item"> 
<a class="nav-link @yield('hom')" aria-current="page" href="#">محصولات</a>
 </li>
 <li class="nav-item">
 <a class="nav-link @yield('pos')" href="#">مجله فرتاک</a>
 </li>
 <li class="nav-item">
 <a class="nav-link @yield('gallar')" href="#">گالری</a>
 </li>
  <li class="nav-item">
 <a class="nav-link @yield('abouts')" href="{{ route('index.aboutUs') }}">درباره ما </a>
 </li>
  <li class="nav-item">
 <a class="nav-link @yield('contacts')" href="{{ route('index.cuntactUs') }}">تماس باما </a>
 </li>
 </ul> 
<form class="d-flex" role="search">
 <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
 <button class="btn btn-outline-light" type="submit">جستجو</button>
 </form>
 </div>
 </div> 
</nav>

</header>