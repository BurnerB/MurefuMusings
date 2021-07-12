<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [BlogController::class,'index'])->name('blog');

Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact');
// Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/blog/{post}', [
    BlogController::class,'show'
    ])->name('blog.show');

    
Route::get('/category/{category}', [
    BlogController::class,'category'
    ])->name('category');

Route::get('/author/{author}', [
    BlogController::class,'author'
    ])->name('author');

Route::get('/tag/{tag}', [
    BlogController::class,'tag'
    ])->name('tag');

Route::get('forget-password', [
    ForgotPasswordController::class, 'showForgetPasswordForm'
    ])->name('forget.password.get');

Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    

Auth::routes();

Route::get('/home', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');
Route::put('/edit-account', [App\Http\Controllers\Backend\HomeController::class, 'update'])->name('update');
Route::get('/edit-account', [App\Http\Controllers\Backend\HomeController::class, 'edit'])->name('edit');



Route::put('/backend/blog/restore/{blog}', [
    App\Http\Controllers\Backend\BlogController::class,'restore'
    ])->name('backend.blog.restore');

Route::delete('/backend/blog/force-destroy/{blog}', [
    App\Http\Controllers\Backend\BlogController::class,'forceDestroy'
    ])->name('backend.blog.force-destroy');

Route::resource('/backend/blog', 'Backend\BlogController',['as'=>'backend']);

Route::resource('/backend/categories', 'Backend\CategoriesController',['as'=>'backend']);

Route::resource('/backend/users', 'Backend\UsersController',['as'=>'backend']);

Route::resource('/backend/testimony', 'Backend\TestimonyController',['as'=>'backend']);

// Route::resource('/backend/misc', 'Backend\MiscController',['as'=>'backend']);

Route::get('/backend/misc', 
[App\Http\Controllers\Backend\MiscController::class, 'index'
])->name('backend.misc.index'
);

Route::post('/backend/misc/update', 
[App\Http\Controllers\Backend\MiscController::class, 'update'
])->name('backend.misc.update'
);

Route::get('/backend/users/confirm/{users}', [
    App\Http\Controllers\Backend\UsersController::class,'confirm'
    ])->name('backend.users.confirm'
);

Route::get('/backend/banner', [
    App\Http\Controllers\Backend\BlogController::class,'banner'
    ])->name('backend.blog.banner');

Route::post('/backend/banner/{id}', [
        App\Http\Controllers\Backend\BlogController::class,'bannerUpdate'
        ])->name('backend.blog.bannerUpdate');


