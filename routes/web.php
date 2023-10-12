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
Route::get('/book' , [ViewController::class , 'book'])->name('book');
Route::get('/confirmbooking' , [ViewController::class , 'confirmbooking'])->name('confirmbooking');


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
Route::get('/cars' , [AdminController::class , 'cars'])->name('cars');
//Categories
Route::get('/categories' , [AdminController::class , 'categories'])->name('categories');
Route::get('/postcategories' , [AdminController::class , 'postcategories'])->name('postcategories');
