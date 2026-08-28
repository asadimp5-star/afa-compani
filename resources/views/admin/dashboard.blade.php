@extends('admin.layout.master-page')

@section('title','پنل ادمین')



@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    
  </x-slot>
</x-manual.page-curent>
@endsection

@section('content')

 @section('page-name','صفحه اصلی')

   
<section>
 <section>
    <div class="container-fluid col-lg-1 col-md-2  float-end bg-success rounded-3 text-center">
            <div>
                <div class="p-3"><h6 class="shabnam" style="color: antiquewhite;">نظر کاربران</h6></div>
            </div>
    
    </div>
    
    <table class="table table-striped table-hover ">
  <thead>
    <tr class="shabnam fs-6">
      <th scope="col">#</th>
      <th scope="col">نام</th>
      <th scope="col">عنوان</th>
      <th scope="col">متن پیام</th>
      <th scope="col">جواب</th>
      <th scope="col">وضعیت</th>
      <th scope="col">تاریخ</th>
      <th scope="col">نوع کالا</th>
      <th scope="col">نوع عملیات</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @forelse($comments as $comment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->title }}</td>
                            <td>{{ substr($comment->description,0,15).'...' }}</td>
                            <td>{{substr($comment->reply,0 ,15).'...' }}</td>
                            <td>{{ ($comment->status == 1) ? 'فعال': 'غیرفعال' }}</td>
                            <td>{{ $comment->created_at }}</td>
                            <td>{{ $comment->category->title }}</td>
                            <td>
                              <section class="d-flex">

                                <form class="mt-1" action="{{ route('admin.comment.status',$comment->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-success">تغییر وضعیت</button>
                                </form>


                                <form action="{{ route('admin.comment.destroy',$comment->id) }}" method="post">
                                 @csrf
                                 @method('DELETE') 
                                <button type="submit" onclick="return confirm('مطمئنی؟')" class="btn btn-outline-danger m-1">حذف</button>
                                </form>
                                
                                <form class="m-1" action="{{ route('admin.comment.edit',$comment->id) }}" method="post">
                                  @csrf
                                  
                                  <button type="submit" class="btn btn-outline-primary">مشاهده نظر و پاسخ</button>
                                </form>
                              </section>
                              
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">نظری وجود ندارد</td>
                        </tr>
                    @endforelse
                    
    </tr>
  </tbody>
</table>
<div class="col-3 pe-5">{{ $comments->links() }}</div>

</section>
<section class="mt-5">
    <div class="container-fluid col-lg-1 col-md-2  float-end bg-success rounded-3 text-center">
            <div>
                <div class="p-3"><h6 class="shabnam" style="color: antiquewhite;">پیام ها</h6></div>
            </div>
    
    </div>
    
    <table class="table table-striped table-hover">
  <thead>
    <tr class="shabnam fs-6">
      <th scope="col">#</th>
      <th scope="col">نام و نام خانوادگی</th>
      <th scope="col">شماره تلفن</th>
      <th scope="col">ایمیل</th>
      <th scope="col">عنوان</th>
      <th scope="col">پیام</th>
      <th scope="col">تاریخ</th>
      <th scope="col">مشاهده پیام</th>
    </tr>
  </thead>
  <tbody>
    @forelse($show as $item)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $item->full_name }}</td>
      <td>{{ $item->phone }}</td>
      <td>{{ $item->email }}</td>
      <td>{{substr($item->title,0,10).'...' }}</td>
      <td>{{substr($item->description,0,15).'...' }}</td>
      <td>{{ $item->created_at }}</td>
      <td>
        <section class="d-flex">
          <form action="{{ route('admin.message.index' ,$item->id) }}" method="post">
          @csrf
          <button type="submit" class="btn btn-outline-info mt-1">مشاهده پیام</button>
        </form>

        <form action="{{ route('admin.message.destroy' ,$item->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('مطمئنی؟')" class="btn btn-outline-danger m-1">حذف</button>

        </form>     

      </section>
        
      </td>
    </tr>
    @empty
    <h6>پیامی وجود ندارد</h6>
    @endforelse
    
  </tbody>
</table>
<div class="col-3 pe-5">{{ $show->links() }}</div>
</section>

</section>



@endsection


