@extends('admin.layout.master-page')

@section('title','کفشوی مکانیزه')

@section('produc','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 " aria-current="page"><a class="text-decoration-none" href="{{ route('admin.category.index') }}">مدیریت کالا</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">کفشوی مکانیزه</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','لیست محصولات کفشوی مکانیزه')

@section('content')

<section class="mt-5" style="margin:1rem;">
    <section >
      <div class="container-fluid col-lg-2 col-md-12  float-end bg-success rounded-3 text-center "style="margin-right:1rem;">
            <div>
                <div class="p-3"><h6 class="shabnam" style="color: antiquewhite;">لیست کالاها</h6></div>
            </div>
    
    </div>
    
    </section>
    
    
    <table class="table table-striped table-hover">
  <thead>
    <tr class="shabnam fs-6">
      <th scope="col">#</th>
      <th scope="col">عنوان</th>
      <th scope="col">کد محصول</th>
      <th scope="col">توضیحات</th>
      <th scope="col">تاریخ</th>
      <th scope="col">وضعیت</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    @forelse($floo as $item)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{substr($item->title,0,10).'...'}}</td>
      <td>{{ $item->product_code }}</td>
      <td>{{ substr($item->description,0,20) }}</td>
      <td>{{ $item->created_at }}</td>
      <td>{{ ($item->status== 1 ? 'فعال' : 'غیر فعال')  }}</td>
      <td>
        <section class="d-flex">

                                <form class="mt-1" action="{{ route('admin.category.status',$item->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-success">تغییر وضعیت</button>
                                </form>


                                <form action="{{ route('admin.category.delete',$item->id) }}" method="post">
                                 @csrf
                                 @method('DELETE') 
                                <button type="submit" onclick="return confirm('مطمئنی؟')" class="btn btn-outline-danger m-1">حذف</button>
                                </form>
                                
                                <a href="{{ route('admin.category.edit',$item->id) }}" class="btn btn-outline-primary m-1">مشاهده و ویرایش</a>
                                
                              </section>
                              
      </td>
    </tr>
    @empty
    <h6>کالایی ای وجود ندارد</h6>
    @endforelse
  </tbody>
</table>
<div class="col-3 pe-5">{{ $floo->links() }}</div>
<div class="col-12 mt-1">
    <a class="btn btn-warning" href="{{ route('admin.category.index') }}">بازگشت</a>
  </div>
</section>





@endsection