<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/company-image/photo_2017-08-08_18-19-421.jpg') }}">

    <title>ورود اعضاء</title>
</head>
<body class="d-flex  align-items-center py-4 bg-body-tertiary">
    
<main class="form-signin w-100 m-auto d-flex mt-5 justify-content-center"> 


<form class="col-lg-3 col-md-8 col-sm-6 mt-5" action="{{ route('getIn') }}" method="post">
    @csrf
 <img class="mb-4 img-thumbnail" src="{{ asset('assets/company-image/photo_2017-08-08_18-19-421.jpg') }}" alt="" width="72" height="57">
 <h1 class="h3 mb-3 fw-normal shabnam">ورود اعضای شرکت </h1>
 <div class="form-floating mb-1"> 
<input type="email" class="form-control " id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
<label for="floatingInput sahel">آدرس ایمیل</label> 
@error('email')
          <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
</div>
 <div class="form-floating mb-1">
 <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
 <label for="floatingPassword sahel">گذرواژه</label>
 @error('password')
          <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
 </div> 
<button class="btn btn-primary w-100 py-2 sahel" type="submit">ورود</button>
<div>
  <a href="{{ route('index.home') }}" class="btn btn-info sahel">خانه</a>
</div>
 <p class="mt-5 mb-3 text-body-secondary">© 2017–2025</p> 
</form>
  

    
  
</main>





<script src="{{asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>





