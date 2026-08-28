@extends('admin.layout.master-page')

@section('title','مشاهده پیام ها')



@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    
  </x-slot>
</x-manual.page-curent>
@endsection

@section('content')

 @section('page-name','مشاهده پیام')

 

    
<section class="m-5">
    
    <section>
        @forelse($messages as $message)
    <form class="row g-3 yekan">
        @csrf
  <div class="col-md-4">
    <label  class="form-label fs-4">نام و نام خانوادگی</label>
    <h6>{{ $message->full_name }}</h6>
  </div>
  <div class="col-md-4">
    <label  class="form-label fs-4">شماره تلفن</label>
    <h6>{{ $message->phone }}</h6>
  </div>
  <div class="col-md-4">
    <label  class="form-label fs-4">ایمیل</label>
    <h6>{{ $message->email }}</h6>
  </div>
  <hr>
  <div class="col-md-4">
    <label  class="form-label fs-4">عنوان</label>
    <h6>{{ $message->title }}</h6>
  </div>
  
  <div class="mb-3 mt-5">
    <label class="form-label fs-4">توضیحات</label>
    <p>{{ $message->description }}</p>
  </div>
  <div class="col-md-4 fs-4">
    <label  class="form-label">تاریخ</label>
    <h6>{{ $message->created_at }}</h6>
  </div>
  @empty
         <div>
            <h5 colspan="3">نظری وجود ندارد</h5>
         </div>
                
        
    @endforelse
                    

  
  <div class="col-12">
    <a class="btn btn-warning" href="{{ route('/admin') }}">بازگشت</a>
  </div>
</form>
    </section>

</section>

@endsection




























