<?php

use App\Http\Controllers\admin\FoodController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\admin\CategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::prefix(LaravelLocalization::setLocale())
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ])
    ->group( function (){
        Route::get('/', [PageController::class, 'index']);
        Route::get('about', [PageController::class, 'about']);
        Route::get('blog-single', [PageController::class, 'blog_single']);
        Route::get('blog', [PageController::class, 'blog']);
        Route::get('chef', [PageController::class, 'chef']);
        Route::get('/menu', [PageController::class, 'menu']);
        Route::get('reservation', [PageController::class, 'reservation']);


        Route::get('contact', [ContactController::class, 'index'])
            ->name('contact.index');
        Route::post('contact', [ContactController::class, 'contact'])
            ->name('.contact.send');

        Route::resource('admin/categories', CategoryController::class)
            ->names('admin.categories')->middleware('auth');
        Route::resource('admin/foods', FoodController::class)
            ->names('admin.foods')->middleware('auth');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


































