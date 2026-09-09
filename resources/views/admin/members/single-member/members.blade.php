@extends('admin.members.single-member.member-master')

@section('title','خانه')

@section('index','active')



@section('curent-page')
<x-manual.member-page-curent>
    <x-slot>
    
  </x-slot>

</x-manual.member-page-curent>

@endsection

@section('page-name','خانه')

@section('content')

  <section class="mt-5" style="margin:1rem;">
    <section >
      <div class="container-fluid col-lg-2 col-md-12  float-end bg-success rounded-3 text-center "style="margin-right:1rem;">
            <div>
                <div class="p-3"><h6 class="shabnam" style="color: antiquewhite;">لیست مقالات</h6></div>
            </div>
    
    </div>
    <a href="{{ route('admin.users.user-aouth') }}">
      <div class="container-fluid col-lg-2 col-md-12  float-start bg-primary rounded-3 text-center"style="margin-left:1rem;">
            <div>
                <div class="p-3"><h6 class=" shabnam" style="color: antiquewhite;">افزودن مقاله جدید</h6></div>
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
      <th scope="col">نویسنده</th>
      <th scope="col">تاریخ</th>
      <th scope="col">وضعیت</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    
    @forelse($posts as $post)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{substr($post->title,0,10).'...'}}</td>
      <td>{{ substr($post->description,0,20).'...' }}</td>
      <td>{{ $post->user->Last_name }}</td>
      <td>{{ $post->created_at }}</td>
      <td>{{ ($post->status== 1 ? 'فعال' : 'غیر فعال')  }}</td>
      <td>
        <section class="d-flex">

                                <form action="{{ route('admin.posts.deletee',$post->slug) }}" method="post">
                                 @csrf
                                 @method('DELETE') 
                                <button type="submit" onclick="return confirm('مطمئنی؟')" class="btn btn-outline-danger m-1">حذف</button>
                                </form>
                                
                                <a href="{{ route('admin.posts.userEdit' ,$post->slug) }}" class="btn btn-outline-primary m-1">مشاهده و ویرایش</a>
                                
                              </section>
                              
      </td>
    </tr> 
    @empty
    <h6>مقاله ای وجود ندارد</h6>
    @endforelse
  </tbody>
</table>
<div class="col-3 pe-5">{{ $posts->links() }}</div>
</section>
@endsection
