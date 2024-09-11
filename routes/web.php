<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PricingController;


Route::get('/', function(){
    return "Updated!";
});
// Page Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('pages', PagesController::class);
});


// Authentication Routes For Admin
Route::get('admin/site/login', [LoginController::class, 'showLoginForm'])->name('Adminlogin');
Route::post('admin/site/login', [LoginController::class, 'login'])->name('Adminlogin');
//Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
//Route::post('register', [RegisterController::class, 'register']);
// Route::get('new-password', function () {
//     return view('new-password');
// });

// Blog Routes
// User routes
Route::get('/blogs', [BlogController::class, 'userIndex'])->name('blogs.userIndex'); // Show all blogs
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');

// Admin routes
Route::get('/admin/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/admin/blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/admin/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('/admin/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('/admin/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');



// FAQ Routes
Route::get('faqs', [FaqController::class, 'userIndex'])->name('faqs');
Route::prefix('admin/faqs')->name('admin.faqs.')->group(function () {
    Route::get('index', [FaqController::class, 'adminIndex'])->name('index');
    Route::get('create', [FaqController::class, 'create'])->name('create');
    Route::post('', [FaqController::class, 'store'])->name('store');
    Route::get('{faq}/edit', [FaqController::class, 'edit'])->name('edit');
    Route::put('{faq}', [FaqController::class, 'update'])->name('update');
    Route::delete('{faq}', [FaqController::class, 'destroy'])->name('destroy');
});


// Dynamic Page Route
 Route::get('/{slug}', [PagesController::class, 'show'])->name('pages.show');


