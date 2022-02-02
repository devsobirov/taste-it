<?php

use App\Http\Controllers\admin\FoodController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use \Illuminate\Support\Facades\DB;
use App\Http\Controllers\admin\CategoryController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('about', [PageController::class, 'about']);
Route::get('blog-single', [PageController::class, 'blog_single']);
Route::get('blog', [PageController::class, 'blog']);
Route::get('chef', [PageController::class, 'chef']);
Route::get('/menu', [PageController::class, 'menu']);
Route::get('reservation', [PageController::class, 'reservation']);


Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'contact'])->name('.contact.send');

Route::resource('admin/categories', CategoryController::class)->names('admin.categories')->middleware('auth');
Route::resource('admin/foods', FoodController::class)->names('admin.foods')->middleware('auth');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');









































Route::get('/dd', function () {
    //$test = env('DB_CONNECTION', 'otabek');
    //$config = config('app.name');

    // get() -> massiv (collection)
    // first() -> yagona elementni oladi
    $cats =  DB::table('categories')->get();
    //dd($cats);

//    foreach ($cats as $cat) {
//        if ($cat->id === 2) {
//            echo $cat->name;
//        }
//    }
    $cat =  $cats->where('id', 2)->first();
    dd($cats->avg('name'));



    $users = DB::table('users')
        ->select(['id','name'])
        ->where('id', '<' , 500)
        ->orWhere('name', 'like', '%al%' )
        ->paginate(15);
    //dd($users);

    foreach ($users as $user) {
        echo "<br> $user->id - $user->name";
    }

    echo $users->links();
});
