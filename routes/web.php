<?php

use App\Http\Controllers\Admin\aboutsController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\commentController;
use App\Http\Controllers\Admin\contactController;
use App\Http\Controllers\Admin\firstPageController;
use App\Http\Controllers\Admin\galleryController;
use App\Http\Controllers\admin\homeController;
use App\Http\Controllers\Admin\messageController;
use App\Http\Controllers\Admin\postController;
use App\Http\Controllers\Auth\authenticContriller;
use App\Http\Controllers\userController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['Admin'])->group(function(){
    Route::get('/',[homeController::class,'index'])->name('/admin');
    Route::post('/status/{comment}',[commentController::class,'status'])->name('admin.comment.status');
    Route::delete('/delete/{comment}',[commentController::class,'destroy'])->name('admin.comment.destroy');
    Route::post('/reply/{comment}',[commentController::class,'edit'])->name('admin.comment.edit');
    Route::put('/reply/{item}',[commentController::class,'update'])->name('admin.comment.update');
    Route::get('/',[homeController::class,'index'])->name('/admin');
    Route::post('/show-message/{item}',[messageController::class,'index'])->name('admin.message.index');
    Route::delete('/delet/{item}',[messageController::class,'destroy'])->name('admin.message.destroy');

    Route::prefix('/posts')->group(function(){
        Route::get('/post',[postController::class,'index'])->name('admin.posts.post');
        Route::post('/status/{item}',[postController::class,'status'])->name('admin.posts.status');
        Route::delete('/delete/{item}',[postController::class,'destroy'])->name('admin.posts.delet');
        Route::get('/create',[postController::class,'create'])->name('admin.posts.create');
        Route::post('/add',[postController::class,'store'])->name('admin.posts.store');
        Route::get('/edit-post/{post}',[postController::class,'edit'])->name('admin.posts.edite');
        Route::get('/edit-Upost/{Upost}',[postController::class,'userEdit'])->name('admin.posts.userEdit');
        Route::delete('/deletee/{Upost}',[postController::class,'Udestroy'])->name('admin.posts.deletee');

        Route::put('/update/{post}',[postController::class,'update'])->name('admin.posts.update');
        
    });
    Route::prefix('users')->group(function(){
        Route::get('/user',[userController::class,'index'])->name('admin.users.user');
        Route::post('/statu/{user}',[userController::class,'status'])->name('admin.users.satatu');
        Route::delete('/delete/{user}',[userController::class,'destroy'])->name('admin.users.delete');
        Route::get('/create',[userController::class,'create'])->name('admin.users.create');
        Route::post('/add',[userController::class,'store'])->name('admin.users.store');
        Route::get('/show/{user}',[userController::class,'show'])->name('admin.users.show');
        Route::get('/observe/{pos}',[userController::class,'edit'])->name('admin.users.edit');
        Route::get('/user-dashboard',[userController::class,'showUser'])->name('admin.users.user-dashboard');
        Route::post('loging-out',[authenticContriller::class,'logOute'])->name('logOute');
        Route::get('/user-aouth',[userController::class,'aouth'])->name('admin.users.user-aouth');
        Route::get('member-profile',[userController::class,'memberProfile'])->name('admin.users.member-profile');
        Route::get('/User-pass-edit/{user}',[userController::class,'showUserPass'])->name('admin.users.user-pass');
        Route::put('/User-pass-update/{user}',[userController::class,'userPass'])->name('admin.users.user-passs');
        Route::get('/User-email-edit/{user}',[userController::class,'useremail'])->name('admin.users.user-email');
        Route::put('/User-email-update/{user}',[userController::class,'UserEmailCheng'])->name('admin.users.user-emaile');
        Route::get('/member-pass-edit/{user}',[userController::class,'memberPass'])->name('admin.users.member-pass');
        Route::put('/member-email-update/{user}',[userController::class,'memberEmailCheng'])->name('admin.users.member-emaile');
        Route::get('/member-email-edit/{user}',[userController::class,'memberEmail'])->name('admin.users.member-email');



        

    });

    Route::prefix('category')->group(function(){
        Route::get('/index',[categoryController::class,'index'])->name('admin.category.index');
        Route::prefix('/ca-wash')->group(function(){
            Route::get('/index',[categoryController::class,'carWash'])->name('admin.category.car-wash.index');
        });
        Route::prefix('/wax')->group(function(){
            Route::get('/index',[categoryController::class,'wax'])->name('admin.category.wax.index');

        });
        Route::prefix('/floor')->group(function(){
            Route::get('/index',[categoryController::class,'floor'])->name('admin.category.floor.index');
        });
        Route::prefix('M-floor')->group(function(){
            Route::get('/index',[categoryController::class,'Mfloor'])->name('admin.category.M-floor.index');
        });
        Route::get('/add-product',[categoryController::class,'create'])->name('admin.category.create');
        Route::post('/store',[categoryController::class,'store'])->name('admin.category.store');
        Route::get('/edit/{item}',[categoryController::class,'edit'])->name('admin.category.edit');
        Route::put('/update/{item}',[categoryController::class,'update'])->name('admin.category.update');
        Route::post('/status/{item}',[categoryController::class,'status'])->name('admin.category.status');
        Route::delete('/delete/{item}',[categoryController::class,'destroy'])->name('admin.category.delete');
        

    });
    Route::prefix('/content')->group(function(){
        Route::get('/index',[homeController::class,'content'])->name('admin.content.index');
        Route::get('/edite/{first}',[firstPageController::class,'edit'])->name('admin.content.first-page.edit');
        Route::put('/update/{first}',[firstPageController::class,'update'])->name('admin.content.first-page.update');
        // Route::get('/first-page',[homeController::class,'firstPage'])->name('admin.content.first-page');
        Route::post('/store',[firstPageController ::class,'store'])->name('admin.content.first-page.store');


        Route::get('/gallery',[homeController::class,'gallery'])->name('admin.content.gallery');
        Route::get('/add-img',[galleryController::class,'create'])->name('admin.content.gallery.create');
        Route::post('/add',[galleryController::class,'store'])->name('admin.content.gallery.store');
        Route::post('/statuus/{item}',[galleryController::class,'status'])->name('admin.content.gallery.status');
        Route::delete('/delette/{item}',[galleryController::class,'destroy'])->name('admin.content.gallery.destroy');
        Route::get('/showw/{item}',[galleryController::class,'edit'])->name('admin.content.gallery.edit');
        Route::post('/g-update/{item}',[galleryController::class,'update'])->name('admin.content.gallery.update');

        // Route::get('/about-us',[homeController::class,'aboutUs'])->name('admin.content.about-us');
        Route::post('/store',[aboutsController::class,'store'])->name('admin.content.about-us.store');
        Route::get('/edit/{abouts}',[aboutsController::class,'edit'])->name('admin.content.abouts.edit');
        Route::put('/updat/{abouts}',[aboutsController::class,'update'])->name('admin.content.abouts.updat');

        Route::get('/contact-us',[homeController::class,'contactUs'])->name('admin.content.contact-us');
        Route::post('/stor',[contactController::class,'store'])->name('admin.content.contact-us.store');
        Route::get('/editee/{contactUs}',[contactController::class,'edit'])->name('admin.content.contact-us.edit');
        Route::post('/updatee/{contactUs}',[contactController::class,'update'])->name('admin.content.contact-us.update');
    });
    Route::prefix('/settings')->group(function(){
        Route::get('/profile',[homeController::class,'show'])->name('admin.settings.show');
    });
    
});

Route::get('home',[homeController::class,'home'])->name('index.home');
Route::get('about-us',[homeController::class,'about'])->name('index.aboutUs');
Route::get('contact-us',[homeController::class,'contact'])->name('index.cuntactUs');
Route::post('contact-us1',[homeController::class,'contact1'])->name('index.cuntactUs1');
Route::get('gallary',[homeController::class,'galarey'])->name('index.galarey');
Route::get('posts',[homeController::class,'postse'])->name('index.postse');
Route::get('post-page/{item}',[homeController::class,'showPost'])->name('index.post');
Route::middleware('Guest')->group(function(){
    Route::get('/sign-in',[authenticContriller::class,'loging'])->name('index.sign-in');

});
Route::post('/signin',[authenticContriller::class,'getIn'])->name('getIn');




Route::prefix('/category')->group(function(){

Route::get('/home',[homeController::class,'homes'])->name('category.home');
Route::get('/carwash',[homeController::class,'carwash'])->name('category.carwash');
Route::get('/wax-tire',[homeController::class,'waxTire'])->name('category.waxTire');
Route::get('/M-floor',[homeController::class,'Mfloor'])->name('category.Mfloor');
Route::get('/S-floor',[homeController::class,'Sfloor'])->name('category.Sfloor');
Route::get('/show-product/{item}',[homeController::class,'showProd'])->name('category.showProduct');
Route::post('/commentt',[homeController::class,'commentt'])->name('category.commentt');

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
