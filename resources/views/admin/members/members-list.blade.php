@extends('admin.layout.master-page')

@section('title','اعضای سایت')

@section('membe','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page">لیست اعضاء</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','لیست اعضاء')

@section('content')

<section class="mt-5" style="margin:1rem;">
    <section >
      <div class="container-fluid col-lg-2 col-md-12  float-end bg-success rounded-3 text-center "style="margin-right:1rem;">
            <div>
                <div class="p-3"><h6 class="shabnam" style="color: antiquewhite;">لیست اعضاء</h6></div>
            </div>
    
    </div>
    <a href="{{ route('admin.users.create') }}">
      <div class="container-fluid col-lg-2 col-md-12  float-start bg-primary rounded-3 text-center"style="margin-left:1rem;">
            <div>
                <div class="p-3"><h6 class=" shabnam" style="color: antiquewhite;">افزودن عضو جدید</h6></div>
            </div>
    
      </div>
    </a>
    </section>
    
    
    <table class="table table-striped table-hover">
  <thead>
    <tr class="shabnam fs-6">
      <th scope="col">#</th>
      <th scope="col">نام</th>
      <th scope="col">نام خانوادگی</th>
      <th scope="col">ایمیل</th>
      <th scope="col">تاریخ</th>
      <th scope="col">وضعیت</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    @forelse($users as $user)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $user->First_name}}</td>
      <td>{{ $user->Last_name}}</td>
      <td>{{ $user->email  }}</td>
      <td>{{ $user->created_at }}</td>
      <td>{{ ($user->status== 1 ? 'فعال' : 'غیر فعال')  }}</td>
      <td>
        <section class="d-flex">

                                <form class="mt-1" action="{{ route('admin.users.satatu',$user->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-success">تغییر وضعیت</button>
                                </form>


                                <form action="{{ route('admin.users.delete',$user->id) }}" method="post">
                                 @csrf
                                 @method('DELETE') 
                                <button type="submit" onclick="return confirm('مطمئنی؟')" class="btn btn-outline-danger m-1">حذف</button>
                                </form>
                                
                                <a href="{{ route('admin.users.show',$user->id) }}" class="btn btn-outline-primary m-1">مشاهده</a>
                                
        </section>
                              
      </td>
    </tr>
    @empty
    <h6>کسی وجود ندارد</h6>
    @endforelse
  </tbody>
</table>
<div class="col-3 pe-5">{{ $users->links() }}</div>
</section>


@endsection