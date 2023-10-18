<?php

use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

//View Controller 
Route::get('/' , [ViewController::class , 'index'])->name('index');
Route::get('/airports' , [ViewController::class , 'airports'])->name('airports');
Route::get('/blog-grid' , [ViewController::class , 'bloggrid'])->name('bloggrid');
Route::get('/blog-details' , [ViewController::class , 'blogdetails'])->name('blogdetails');
Route::get('/blog-classic' , [ViewController::class , 'blogclassic'])->name('blogclassic');
Route::get('/find' , [ViewController::class , 'find'])->name('find');
Route::get('/book/{car_id}', [ViewController::class, 'book'])->name('book');

Route::get('/confirmbooking/{car_id}' , [ViewController::class , 'confirmbooking'])->name('confirmbooking');
Route::post('/stripePost', [ViewController::class, 'stripePost'])->name('stripe.post');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Admin COntroller 
Route::get('/dashboard' , [AdminController::class , 'dashboard'])->name('dashboard');
Route::get('/google_map' , [AdminController::class , 'googlemap'])->name('google_map');
Route::get('/cars' , [AdminController::class , 'cars'])->name('cars');
Route::get('/users' , [AdminController::class , 'users'])->name('users');
Route::get('/addcars', [AdminController::class, 'addcars'])->name('addcars');
Route::post('/postcars', [AdminController::class, 'postcars'])->name('postcars');
Route::get('/editcars/{id}', [AdminController::class, 'editcars'])->name('editcars');
Route::post('/updatecars/{id}', [AdminController::class, 'updatecars'])->name('updatecars');
Route::get('/deletecars/{id}', [AdminController::class, 'deletecars'])->name('deletecars');
//Categories
Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
Route::get('/postcategories', [AdminController::class, 'postcategories'])->name('postcategories');
Route::get('/editcategories/{id}', [AdminController::class, 'editcategories'])->name('editcategories');
Route::get('/updatecategories/{id}', [AdminController::class, 'updatecategories'])->name('updatecategories');
Route::get('/deletecategories/{id}', [AdminController::class, 'deletecategories'])->name('deletecategories');


Route::post('searchbooking', [ViewController::class, 'searchBooking'])->name('searchBooking');



