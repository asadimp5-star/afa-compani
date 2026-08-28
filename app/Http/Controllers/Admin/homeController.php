<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\comment;
use App\Models\contact;
use App\Models\gallery;
use App\Models\firstPage;
use App\Models\message;
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

}