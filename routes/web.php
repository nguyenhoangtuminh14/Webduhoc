<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\CommentController;
use PHPUnit\Framework\Attributes\Group;

Route::group(['prefix'=>''],function(){
    Route::get('/blog', [HomeController::class,'blog'])->name('all_blogs');
    Route::get('/all_blogs', [HomeController::class, 'all_blog']);
    Route::get('/all_blogs/{id}', [HomeController::class, 'show_blog'])->name('blog.show');
    route::resource( 'blogs',BlogController::class);
    Route::get('/blogs/search', [BlogController::class, 'search'])->name('blogs.search');
    route::resource( 'blog_main',BlogController::class);
    Route::post('/blogs/{id}/comments', [HomeController::class, 'storeComment'])->name('comments.store');
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/services', [HomeController::class, 'services'])->name('services.services');
    Route::get('/services/{id}', [HomeController::class, 'show'])->name('services.show');
    Route::get('/register', [HomeController::class, 'register']);
    Route::get('/consultation', [HomeController::class, 'consultation']);
    Route::get('/consultation', [ConsultationController::class, 'create'])->name('consultation.create');
    Route::post('/registrations', [ConsultationController::class, 'store'])->name('registrations.store');
    Route::get('/scholarshipss', [ScholarshipController::class, 'allScholarships'])->name('scholarships.all');
    Route::get('/scholarshipss/{id}', [ScholarshipController::class, 'showScholarship'])->name('scholarships.showScholarship');
    Route::get('/scholarships/autocomplete', [ScholarshipController::class, 'autocomplete'])->name('scholarships.autocomplete');
    Route::get('/contact', [HomeController::class, 'contact']);
    Route::post('/contact/submit', [HomeController::class, 'submit_Contact'])->name('contacts.submit'); 
    Route::get('/advisory', [HomeController::class, 'advisory']);
    Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');
});

// ==============================================================

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'check_login']);
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'check_register']);

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    route::get('/',[AdminController::class,'main'])->name('admin.index');
    route::get('view',[AdminController::class,'view'])->name('admin.view');
    Route::resource('countries', CountryController::class);
    Route::resource('services_admin', ServiceController::class);
    route::resource( 'blogs',BlogController::class);
    Route::delete('/blogs/{id}', [BlogController::class, 'destroyblog'])->name('blogs.destroy');
    Route::post('/blogs/{id}/comments/reply', [BlogController::class, 'storeReply'])->name('blogs.storeReply');
    Route::delete('/comments/{id}', [CommentController::class, 'destroycomment'])->name('comments.destroy');
    route::resource( 'contact',ContactController::class);
    Route::get('contact/reply/{id}', [ContactController::class, 'showReplyForm'])->name('contact.showReplyForm');
    Route::post('contact/reply/{id}', [ContactController::class, 'reply'])->name('contact.reply');
    Route::resource('scholarships', ScholarshipController::class);
    route::resource( 'fields',FieldController::class);
    Route::get('/consultation', [ConsultationController::class, 'list'])->name('consultation.list');
    Route::post('/consultation/approve/{id}', [ConsultationController::class, 'approve'])->name('consultation.approve');
    Route::get('/consultation/{id}', [ConsultationController::class, 'show'])->name('consultation.show');
    Route::delete('/consultation/{id}', [ConsultationController::class, 'destroy'])->name('consultation.destroy');
});

Route::apiResource('users', UserController::class);
Route::apiResource('countries', CountryController::class);
Route::apiResource('consultations', ConsultationController::class);


