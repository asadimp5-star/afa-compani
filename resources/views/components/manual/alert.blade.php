@if (session('success'))
<section class="container-fluid d-flex justify-content-center">
    <div class="alert alert-success col-6 text-center m-1" role="alert">
        <h6 class="yekan">{{session('success')}}</h6>
          
    </div>
</section>

@endif