<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\MessageRequest;
use App\Models\About;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\FirstPage;
use App\Models\Message;
use App\Models\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
      
       $comments = Comment::orderByDesc('id')->paginate(3); // 10 records per page
       $show = Message::orderBy('id' , 'desc')->paginate(3);

       return view('Admin.dashboard',compact('comments','show'));
    
    }
    public function content()
    {
        $first = FirstPage::first();
        $abouts = About::first();
        $contactUs = Contact::first();
        return view('admin.site-content.cotent-page',compact('first','abouts','contactUs'));
    }
    public function firstPage()
    {
        return view('admin.site-content.first-page.index');
    }
    public function gallery()
    {
        $gallere = Gallery::orderByDesc('id')->paginate(3);
        return view('admin.site-content.gallery.gallery',compact('gallere'));
    }
    public function aboutUs()
    {
        return view('admin.site-content.about-us.about-us');
    }
    public function contactUs()
    {
        return view('admin.site-content.contact-us.contact-us');
    }
    public function show()
    {
        return view('admin.admin-profile.admin-profile');
    }

    //front client

    public function home()
    {
        $home = FirstPage::all();

        return view('front-client.home',compact('home'));
    }
    public function about()
    {
        $aboute = About::all();
        return view('front-client.abouts',compact('aboute'));
    }
    public function contact()
    {
        $contact = Contact::all();
        return view('front-client.contacts',compact('contact'));
    }
    public function galarey()
    {
        $galary = Gallery::all();
        return view('front-client.gallary',compact('galary'));
    }
    public function postse()
    {
        $poste = Post::orderByDesc('id')->paginate(5);
        return view('front-client.fatak-mag.fartakPosts',compact('poste'));
    }
    public function showPost($locale, Post $item)
    {
        
        
        return view('front-client.fatak-mag.showPost',compact('item'));
    }


    public function contact1(MessageRequest $request)
    {
        $data = $request->validated();
        Message::create($data);

        return redirect()->route('index.cuntactUs')->with('success','پیام شما با موفقیت دریافت شد');
    }

    public function homes()
    {
        return view('front-client.products.category');
    }

    public function carwash()
    {
        $catshow = Category::orderByDesc('id')->get();
    
        return view('front-client.products.carWash',compact('catshow'));
    }
    public function waxTire()
    {
        $catshow = Category::orderByDesc('id')->get();

        return view('front-client.products.tireWax',compact('catshow'));
    }
    public function Mfloor()
    {
        $catshow = Category::orderByDesc('id')->get();

        return view('front-client.products.manualFloor',compact('catshow'));
    }
    public function Sfloor()
    {
        $catshow = Category::orderByDesc('id')->get();

        return view('front-client.products.machineFloor',compact('catshow'));
    }

    public function showProd($locale ,Category $item)
    {
        // $showComm = comment::orderByDesc('id')->get();
        return view('front-client.products.show-product',compact('item'));
    }
    public function commentt(CommentRequest $request)
    {
        
        $data = $request->validated();
        $data['status']= 0 ;

         Comment::create($data);
       
        return back()->with('success','نظر با موفقیت ثبت شد.پس از تایید مدیر به نمایش در می آید');

    }



}