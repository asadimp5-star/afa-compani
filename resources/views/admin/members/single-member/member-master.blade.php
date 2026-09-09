<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/company-image/photo_2017-08-08_18-19-421.jpg') }}">
    <title>@yield('title')</title>
</head>
@livewireStyles
<body class="bg-body-tertiary">
    <header class="container-fluid bg-body-secondary rounded-5 col-8">
      
    
        <section class="pt-2">
          <h5 class="shabnam card border-success rounded-4 p-1 text-center">پنل مدیریت شرکت بین المللی افق فرتاک البرز</h5>
        </section>

        
        <section class="d-flex">
            <section class="col-7 col-md-9">
            <nav class="navbar navbar-expand-xl navbar-dark rounded-5 bg-info col-sm-9 col-md-10" aria-label="Sixth navbar example">
                <div class="container-fluid">
                                        <a class="navbar-brand shabnam active" href="{{ route('admin.users.user-dashboard') }}">صفحه اصلی</a>
                                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"         data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarsExample06">
                            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                                <li class="nav-item"> 
                                    <a class="nav-link shabnam @yield('index')" aria-current="page" href="{{ route('admin.users.user-dashboard') }}">خانه</a>
                                </li>

                                <!-- <li class="nav-item"> 
                                    <a class="nav-link shabnam @yield('pose')" aria-current="page" href="#">مقالات</a>
                                </li> -->
                                
                                <li class="nav-item ">
                                    <a class="nav-link shabnam @yield('profi')" href="{{ route('admin.users.member-profile') }}">ویرایش پروفایل</a>
                                </li>
                                <li class="nav-item ">
                                    <form action="{{ route('logOute') }}" method="post">
                                            @csrf
                                            <button type="submit" class="nav-link shabnam text-danger">خروج</a>
                                    </form>
                                </li>
                                
                            </ul>

                        </div>

                </div>
            </nav>

            

            </section>
            <section>
                    <a href="{{ route('admin.users.user-dashboard') }}" class="text-decoration-none">
                   
                      <img  src="{{ asset('assets/company-image/photo_2017-08-08_18-19-421.jpg') }}" class="img-thumbnail" alt="image logo" width="90" height="60">     
                        
                    </a>

            </section>

        </section>

    </header>
    <section>
        <section class="mt-1 container-fluid">
            <div class="card bg-body-secondary rounded-0 border-end-0 border-start-0">
                <div class="card-body container-fluid">
                        
                <div class="d-flex justify-content-between">
                        
                        @yield('curent-page')
                        <h4 class="vaziri">سلام {{ Auth::User()->First_name }}</h4>


                    </div>
                    
                </div>
            </div>
        </section>
        <section class="mt-1 col-5 container-fluid">
            <div class="card bg-body-tertiary rounded-0 border-0">
                <div class="card-body container-fluid col-lg-4 col-md-6 col-sm-12  border border-success rounded-5 text-center">
                <h4 class="yekan" >@yield('page-name')</h4>   
                
                </div>
            </div>
        </section>
    </section>
    <main>
        <section class="justify-content-center">
        <x-manual.alert>

        </x-manual.alert>


        </section>

        @yield('content')
    </main>
    <section class="container-fluid border-top mt-5 ">
        <footer class="footer contTopHead">
            <p>  · Company, Inc . Ofogh Fartak Alborz © 2017–2025.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>
</section>
  <script src="{{ asset('assets/app.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @livewireStyles
</body>
</html>