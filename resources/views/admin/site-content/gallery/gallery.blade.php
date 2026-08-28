@extends('admin.layout.master-page')

@section('title','مدیریت محتوی')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.content.index') }}">مدیریت محتوی</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">مدیریت گالری</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','مدیریت گالری')

@section('content')

<section class="mt-5" style="margin:1rem;">
    <section >
      <div class="container-fluid col-lg-2 col-md-12  float-end bg-success rounded-3 text-center "style="margin-right:1rem;">
            <div>
                <div class="p-3"><h6 class="shabnam" style="color: antiquewhite;">لیست تصاویر</h6></div>
            </div>
    
    </div>
    <a href="{{ route('admin.content.gallery.create') }}">
      <div class="container-fluid col-lg-2 col-md-12  float-start bg-primary rounded-3 text-center"style="margin-left:1rem;">
            <div>
                <div class="p-3"><h6 class="shabnam" style="color: antiquewhite;">افزودن عکس جدید</h6></div>
            </div>
    
      </div>
    </a>
    </section>
<table class="table table-striped table-hover">
  <thead>
    <tr class="shabnam fs-6">
      <th scope="col">#</th>
      <th scope="col">عنوان</th>
      <th scope="col">خلاصه</th>
      <th scope="col">عکس</th>
      <th scope="col">تاریخ</th>
      <th scope="col">وضعیت</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    @forelse($gallere as $item)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ substr($item->title,0,10).'...'}}</td>
      <td>{{ substr($item->description,0,20).'...' }}</td>
      <td class="col-3">
        <div class="col-6">
          <img src="{{ asset('storage/gallery-img/'. $item->images) }}" height="50%" role="img" width="50%" alt="{{ $item->title }}">
      </div>
      </td>
      <td>{{ $item->created_at }}</td>
      <td>{{ ($item->status== 1 ? 'فعال' : 'غیر فعال')  }}</td>
      <td>
        <section class="d-flex">

                                <form class="mt-1" action="{{ route('admin.content.gallery.status',$item->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-success">تغییر وضعیت</button>
                                </form>


                                <form action="{{ route('admin.content.gallery.destroy',$item->id) }}" method="post">
                                 @csrf
                                 @method('DELETE') 
                                <button type="submit" onclick="return confirm('مطمئنی؟')" class="btn btn-outline-danger m-1">حذف</button>
                                </form>
                                
                                <a href="{{ route('admin.content.gallery.edit',$item->id) }}" class="btn btn-outline-primary m-1">مشاهده و ویرایش</a>
                                
        </section>
                              
      </td>
    </tr>
    @empty
    <h6>عکسی وجود ندارد</h6>
    @endforelse
  </tbody>
</table>
<div class="col-3 pe-5">{{ $gallere->links() }}</div>
</section>
</section>
<div class="col-12">
    <a class="btn btn-warning" href="{{ route('admin.content.index') }}">بازگشت</a>
</div>

@endsection