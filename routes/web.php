<?php

use App\Http\Controllers\Admin\AboutsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FirstPageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\AuthenticController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('{locale}')->where(['locale'=>'fa|en'])->group(function(){

Route::prefix('admin')->middleware(['Admin'])->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('/admin');
    Route::post('/status/{comment}',[CommentController::class,'status'])->name('admin.comment.status');
    Route::delete('/delete/{comment}',[CommentController::class,'destroy'])->name('admin.comment.destroy');
    Route::post('/reply/{comment}',[CommentController::class,'edit'])->name('admin.comment.edit');
    Route::put('/reply/{item}',[CommentController::class,'update'])->name('admin.comment.update');
    Route::get('/',[HomeController::class,'index'])->name('/admin');
    Route::post('/show-message/{item}',[MessageController::class,'index'])->name('admin.message.index');
    Route::delete('/delet/{item}',[MessageController::class,'destroy'])->name('admin.message.destroy');


    Route::prefix('/posts')->group(function(){
        Route::get('/post',[PostController::class,'index'])->name('admin.posts.post');
        Route::post('/status/{item}',[PostController::class,'status'])->name('admin.posts.status');
        Route::delete('/p-delete/{item}',[PostController::class,'destroy'])->name('admin.posts.delet');
        Route::get('/create',[PostController::class,'create'])->name('admin.posts.create');
        Route::post('/add',[PostController::class,'store'])->name('admin.posts.store');
        Route::get('/edit-post/{post}',[PostController::class,'edit'])->name('admin.posts.edite');
        Route::get('/edit-Upost/{Upost}',[PostController::class,'userEdit'])->name('admin.posts.userEdit');
        Route::delete('/deletee/{Upost}',[PostController::class,'Udestroy'])->name('admin.posts.deletee');

        Route::put('/update/{post}',[PostController::class,'update'])->name('admin.posts.update');
        
    });
    Route::prefix('users')->group(function(){
        Route::get('/user',[UserController::class,'index'])->name('admin.users.user');
        Route::post('/statu/{user}',[UserController::class,'status'])->name('admin.users.satatu');
        Route::delete('/delete/{user}',[UserController::class,'destroy'])->name('admin.users.delete');
        Route::get('/create',[UserController::class,'create'])->name('admin.users.create');
        Route::post('/add',[UserController::class,'store'])->name('admin.users.store');
        Route::get('/show/{user}',[UserController::class,'show'])->name('admin.users.show');
        Route::get('/observe/{pos}',[UserController::class,'edit'])->name('admin.users.edit');
        Route::get('/user-dashboard',[UserController::class,'showUser'])->name('admin.users.user-dashboard');
        Route::post('loging-out',[AuthenticController::class,'logOute'])->name('logOute');
        Route::get('/user-aouth',[UserController::class,'aouth'])->name('admin.users.user-aouth');
        Route::get('member-profile',[UserController::class,'memberProfile'])->name('admin.users.member-profile');
        Route::get('/User-pass-edit/{user}',[UserController::class,'showUserPass'])->name('admin.users.user-pass');
        Route::put('/User-pass-update/{user}',[UserController::class,'userPass'])->name('admin.users.user-passs');
        Route::get('/User-email-edit/{user}',[UserController::class,'useremail'])->name('admin.users.user-email');
        Route::put('/User-email-update/{user}',[UserController::class,'UserEmailCheng'])->name('admin.users.user-emaile');
        Route::get('/member-pass-edit/{user}',[UserController::class,'memberPass'])->name('admin.users.member-pass');
        Route::put('/member-email-update/{user}',[UserController::class,'memberEmailCheng'])->name('admin.users.member-emaile');
        Route::get('/member-email-edit/{user}',[UserController::class,'memberEmail'])->name('admin.users.member-email');



        

    });

    Route::prefix('category')->group(function(){
        Route::get('/index',[CategoryController::class,'index'])->name('admin.category.index');
        Route::prefix('/ca-wash')->group(function(){
            Route::get('/index',[CategoryController::class,'carWash'])->name('admin.category.car-wash.index');
        });
        Route::prefix('/wax')->group(function(){
            Route::get('/index',[CategoryController::class,'wax'])->name('admin.category.wax.index');

        });
        Route::prefix('/floor')->group(function(){
            Route::get('/index',[CategoryController::class,'floor'])->name('admin.category.floor.index');
        });
        Route::prefix('M-floor')->group(function(){
            Route::get('/index',[CategoryController::class,'Mfloor'])->name('admin.category.M-floor.index');
        });
        Route::get('/add-product',[CategoryController::class,'create'])->name('admin.category.create');
        Route::post('/store',[CategoryController::class,'store'])->name('admin.category.store');
        Route::get('/edit/{slug}',[CategoryController::class,'edit'])->name('admin.category.edit');
        Route::put('/update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
        Route::post('/status/{item}',[CategoryController::class,'status'])->name('admin.category.status');
        Route::delete('/delete/{item}',[CategoryController::class,'destroy'])->name('admin.category.delete');
        

    });
    Route::prefix('/content')->group(function(){
        Route::get('/index',[HomeController::class,'content'])->name('admin.content.index');
        Route::get('/edite/{first}',[FirstPageController::class,'edit'])->name('admin.content.first-page.edit');
        Route::put('/update/{first}',[FirstPageController::class,'update'])->name('admin.content.first-page.update');
        Route::get('/first-page',[HomeController::class,'firstPage'])->name('admin.content.first-page');
        Route::post('/storee',[FirstPageController ::class,'store'])->name('admin.content.first-page.store');


        Route::get('/gallery',[HomeController::class,'gallery'])->name('admin.content.gallery');
        Route::get('/add-img',[GalleryController::class,'create'])->name('admin.content.gallery.create');
        Route::post('/add',[GalleryController::class,'store'])->name('admin.content.gallery.store');
        Route::post('/statuus/{item}',[GalleryController::class,'status'])->name('admin.content.gallery.status');
        Route::delete('/delette/{item}',[GalleryController::class,'destroy'])->name('admin.content.gallery.destroy');
        Route::get('/showw/{item}',[GalleryController::class,'edit'])->name('admin.content.gallery.edit');
        Route::put('/g-update/{item}',[GalleryController::class,'update'])->name('admin.content.gallery.update');

        Route::get('/about-us',[HomeController::class,'aboutUs'])->name('admin.content.about-us');
        Route::post('/store',[AboutsController::class,'store'])->name('admin.content.about-us.store');
        Route::get('/edit/{abouts}',[AboutsController::class,'edit'])->name('admin.content.abouts.edit');
        Route::put('/updat/{abouts}',[AboutsController::class,'update'])->name('admin.content.abouts.updat');

        Route::get('/contact-us',[HomeController::class,'contactUs'])->name('admin.content.contact-us');
        Route::post('/stor',[ContactController::class,'store'])->name('admin.content.contact-us.store');
        Route::get('/editee/{contactUs}',[ContactController::class,'edit'])->name('admin.content.contact-us.edit');
        Route::put('/updatee/{contactUs}',[ContactController::class,'update'])->name('admin.content.contact-us.update');
    });
    Route::prefix('/settings')->group(function(){
        Route::get('/profile',[HomeController::class,'show'])->name('admin.settings.show');
    });

    

    
});


 



    Route::get('/home',[HomeController::class,'home'])->name('index.home');
    Route::get('/about-us',[HomeController::class,'about'])->name('index.aboutUs');
    Route::get('/contact-us',[HomeController::class,'contact'])->name('index.cuntactUs');
    Route::post('/contact-us1',[HomeController::class,'contact1'])->name('index.cuntactUs1');
    Route::get('/gallary',[HomeController::class,'galarey'])->name('index.galarey');
    Route::get('/posts',[HomeController::class,'postse'])->name('index.postse');
    Route::get('/post-page/{item}',[HomeController::class,'showPost'])->name('index.post');
    Route::middleware('Guest')->group(function(){
        Route::get('/sign-in',[AuthenticController::class,'loging'])->name('index.sign-in');
        Route::post('/signin',[AuthenticController::class,'getIn'])->name('getIn');
});

    Route::prefix('/category')->group(function(){

    Route::get('/home',[HomeController::class,'homes'])->name('category.home');
    Route::get('/carwash',[HomeController::class,'carwash'])->name('category.carwash');
    Route::get('/wax-tire',[HomeController::class,'waxTire'])->name('category.waxTire');
    Route::get('/M-floor',[HomeController::class,'Mfloor'])->name('category.Mfloor');
    Route::get('/S-floor',[HomeController::class,'Sfloor'])->name('category.Sfloor');
    Route::get('/show-product/{item}',[HomeController::class,'showProd'])->name('category.showProduct');
    Route::post('/commentt',[HomeController::class,'commentt'])->name('category.commentt');

});
});

    





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
