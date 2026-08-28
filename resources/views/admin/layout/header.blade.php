

<header class="container-fluid bg-body-secondary rounded-5 col-8">
      
    
        <section class="pt-2">
          <h5 class="shabnam card border-success rounded-4 p-1 text-center">پنل مدیریت شرکت بین المللی افق فرتاک البرز</h5>
        </section>

        
        <section class="d-flex">
            <section class="col-7 col-md-9">
            <nav class="navbar navbar-expand-xl navbar-dark rounded-5 bg-info col-sm-9 col-md-10" aria-label="Sixth navbar example">
                <div class="container-fluid">
                                        <a class="navbar-brand shabnam @yield('hom')" href="{{ route('/admin') }}">صفحه اصلی</a>
                                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"         data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarsExample06">
                            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                                <li class="nav-item"> 
                                    <a class="nav-link shabnam @yield('pos')" aria-current="page" href="{{ route('admin.posts.post') }}">مقالات</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link shabnam @yield('membe')" href="{{ route('admin.users.user') }}">اعضای شرکت</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link shabnam @yield('produc')" href="{{ route('admin.category.index') }}">مدیریت کالا</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link shabnam @yield('conten')" href="{{ route('admin.content.index') }}">مدیریت محتوی</a>
                                </li>
                                <li class="nav-item dropdown "> 
                                    <a class="nav-link dropdown-toggle shabnam @yield('seting')" href="#" data-bs-toggle="dropdown" aria-expanded="false">تنظیمات</a>
                                <ul class="dropdown-menu"> 
                                    <li>
                                        <a class="dropdown-item shabnam" href="#">ویرایش پروفایل</a>
                                    </li> 
                                    <li>
                                        <a class="dropdown-item shabnam" href="#">خروج</a>
                                    </li>
                                    
                                </ul>
                                </li> 
                            </ul>

                        </div>

                </div>
            </nav>

            

            </section>
            <section>
                    <a href="{{ route('/admin') }}" class="text-decoration-none">
                   
                      <img  src="{{ asset('assets/company-image/photo_2017-08-08_18-19-421.jpg') }}" alt="image logo" width="120" height="80">     
                        
                    </a>

            </section>

        </section>

    </header>
    <section>
        <section class="mt-1 container-fluid">
            <div class="card bg-body-secondary rounded-0 border-end-0 border-start-0">
                <div class="card-body container-fluid">
                        
                @yield('curent-page')
                    
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



    <!-- @section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page">لیست کالاها</li>
  </x-slot>
</x-manual.page-curent>
@endsection -->