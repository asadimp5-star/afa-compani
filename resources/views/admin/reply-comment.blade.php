@extends('admin.layout.master-page')

@section('title','جواب')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
  </x-slot>
</x-manual.page-curent>
@endsection


@section('page-name','پاسخ به نظرات')

@section('content')



<section class="m-5">
    
    <section>
        @forelse($show as $item)
    <form class="row g-3 yekan" action="{{ route('admin.comment.update',$item->id) }}" method="post">
        @csrf
        @method('PUT')
  <div class="col-md-4">
    <label  class="form-label">نام</label>
    <h4>{{ $item->name }}</h4>
  </div>
  <div class="col-md-4">
    <label  class="form-label">عنوان</label>
    <h4>{{ $item->title }}</h4>
  </div>
  
  <div class="mb-3 mt-5">
    <label class="form-label">توضیحات</label>
    <p>{{ $item->description }}</p>
  </div>
  <div class="mb-3">
    <label  class="form-label">توضیحات</label>
    <textarea class="form-control" name="reply" placeholder="پاسخ اینجا وارد کنید">{{ $item->reply }}</textarea>
  </div>
  @empty
         <div>
            <h5 colspan="3">نظری وجود ندارد</h5>
         </div>
                
        
    @endforelse
                    

  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">ثبت نظر</button>
  </div>
  <div class="col-12">
    <a class="btn btn-warning" href="{{ route('/admin') }}">بازگشت</a>
  </div>
</form>
    </section>

</section>













@endsection