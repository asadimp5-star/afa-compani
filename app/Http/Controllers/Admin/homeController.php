<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\commentRequest;
use App\Http\Requests\contactRequest;
use App\Http\Requests\messageRequest;
use App\Models\about;
use App\Models\category;
use App\Models\comment;
use App\Models\contact;
use App\Models\gallery;
use App\Models\firstPage;
use App\Models\message;
use App\Models\post;
use Illuminate\Http\Request;


class homeController extends Controller
{
    public function index()
    {
      
       $comments = comment::orderByDesc('id')->paginate(3); // 10 records per page
       $show = message::orderBy('id' , 'desc')->paginate(3);

       return view('Admin.dashboard',compact('comments','show'));
    
    }
    public function content()
    {
        $first = firstPage::first();
        $abouts = about::first();
        $contactUs = contact::first();
        return view('admin.site-content.cotent-page',compact('first','abouts','contactUs'));
    }
    public function firstPage()
    {
        return view('admin.site-content.first-page.index');
    }
    public function gallery()
    {
        $gallere = gallery::orderByDesc('id')->paginate(3);
        return view('admin.site-content.gallery.gallery',compact('gallere'));
    }
    public function aboutUs()
    {
        return view('admin.site-content.about-us.edit-aboutus');
    }
    public function contactUs()
    {
        return view('admin.site-content.contact-us.contact-us');
    }
    public function show()
    {
        return view('admin.admin-profile');
    }

    //front client

    public function home()
    {
        $home = firstPage::all();

        return view('front-client.home',compact('home'));
    }
    public function about()
    {
        $aboute = about::all();
        return view('front-client.abouts',compact('aboute'));
    }
    public function contact()
    {
        $contact = contact::all();
        return view('front-client.contacts',compact('contact'));
    }
    public function galarey()
    {
        $galary = gallery::all();
        return view('front-client.gallary',compact('galary'));
    }
    public function postse()
    {
        $poste = post::orderByDesc('id')->paginate(5);
        return view('front-client.fatak-mag.fartakPosts',compact('poste'));
    }
    public function showPost(post $item)
    {
        // $sowP = post::all($item);
        
        return view('front-client.fatak-mag.showPost',compact('item'));
    }


    public function contact1(messageRequest $request)
    {
        $data = $request->validated();
        message::create($data);

        return redirect()->route('index.cuntactUs')->with('success','پیام شما با موفقیت دریافت شد');
    }

    public function homes()
    {
        return view('front-client.products.category');
    }

    public function carwash()
    {
        $catshow = category::orderByDesc('id')->get();
    
        return view('front-client.products.carWash',compact('catshow'));
    }
    public function waxTire()
    {
        $catshow = category::orderByDesc('id')->get();

        return view('front-client.products.tireWax',compact('catshow'));
    }
    public function Mfloor()
    {
        $catshow = category::orderByDesc('id')->get();

        return view('front-client.products.manualFloor',compact('catshow'));
    }
    public function Sfloor()
    {
        $catshow = category::orderByDesc('id')->get();

        return view('front-client.products.machineFloor',compact('catshow'));
    }

    public function showProd(category $item)
    {
        // $showComm = comment::orderByDesc('id')->get();
        return view('front-client.products.show-product',compact('item'));
    }
    public function commentt(commentRequest $request)
    {
        
        $data = $request->validated();
        $data['status']= 0 ;

         comment::create($data);
       
        return back()->with('success','نظر با موفقیت ثبت شد.پس از تایید مدیر به نمایش در می آید');

    }



}