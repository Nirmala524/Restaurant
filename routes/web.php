<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\HappyController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MultiController;
use App\Http\Controllers\OurserviceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TitleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // ................sliderbar route......................

    Route::prefix('admin/slider')->group(function () {

        Route::get('/', [SliderController::class, 'index']);
        Route::get('/create', [SliderController::class, 'create']);
        Route::post('/store', [SliderController::class, 'store']);
        Route::get('/edit/{id}', [SliderController::class, 'edit']);
        Route::post('/update', [SliderController::class, 'update']);
        Route::get('/delete/{id}', [SliderController::class, 'destory']);

    });

    // ................About route......................

    Route::prefix('admin/about')->group(function () {

        Route::get('/', [AboutController::class, 'index']);
        Route::post('/update', [AboutController::class, 'update']);
    });
    // ................ourservice route......................

    Route::prefix('admin/ourservice')->group(function () {

        Route::get('/', [OurserviceController::class, 'index']);
        Route::post('/update', [OurserviceController::class, 'update']);


    });

    // ................services route......................

    Route::prefix('admin/service')->group(function () {

        Route::get('/', [ServiceController::class, 'index']);
        Route::get('/create', [ServiceController::class, 'create']);
        Route::post('/store', [ServiceController::class, 'store']);
        Route::get('/edit/{id}', [ServiceController::class, 'edit']);
        Route::post('/update', [ServiceController::class, 'update']);
        Route::get('/delete/{id}', [ServiceController::class, 'destory']);

    });

    ///==============================menu route===========================

    Route::prefix('admin/menu')->group(function () {

        Route::get('/', [MenuController::class, 'index']);
        Route::get('/create', [MenuController::class, 'create']);
        Route::post('/store', [MenuController::class, 'store']);
        Route::get('/edit/{id}', [MenuController::class, 'edit']);
        Route::post('/update', [MenuController::class, 'update']);
        Route::get('/delete/{id}', [MenuController::class, 'destory']);

    });


    ///==============================Item route===========================

    Route::prefix('admin/happy')->group(function () {

        Route::get('/', [HappyController::class, 'index']);
        Route::get('/create', [HappyController::class, 'create']);
        Route::post('/store', [HappyController::class, 'store']);
        Route::get('/edit/{id}', [HappyController::class, 'edit']);
        Route::post('/update', [HappyController::class, 'update']);
        Route::get('/delete/{id}', [HappyController::class, 'destory']);

    });


    //=======================dish Route=================

    Route::prefix('admin/dish')->group(function () {

        Route::get('/', [DishController::class, 'index']);
        Route::get('/create', [DishController::class, 'create']);
        Route::post('/store', [DishController::class, 'store']);
        Route::get('/edit/{id}', [DishController::class, 'edit']);
        Route::post('/update', [DishController::class, 'update']);
        Route::get('/delete/{id}', [DishController::class, 'destory']);


    });

    // ................team route......................

    Route::prefix('admin/team')->group(function () {

        Route::get('/', [TeamController::class, 'index']);
        Route::get('/create', [TeamController::class, 'create']);
        Route::post('/store', [TeamController::class, 'store']);
        Route::get('/edit/{id}', [TeamController::class, 'edit']);
        Route::post('/update', [TeamController::class, 'update']);
        Route::get('/delete/{id}', [TeamController::class, 'destory']);

    });

    // ................customer route......................

    Route::prefix('admin/customer')->group(function () {

        Route::get('/', [CustomerController::class, 'index']);
        Route::get('/create', [CustomerController::class, 'create']);
        Route::post('/store', [CustomerController::class, 'store']);
        Route::get('/edit/{id}', [CustomerController::class, 'edit']);
        Route::post('/update', [CustomerController::class, 'update']);
        Route::get('/delete/{id}', [CustomerController::class, 'destroy']);
    });

    // ................customer route......................

    Route::prefix('admin/instagram')->group(function () {

        Route::get('/', [InstagramController::class, 'index']);
        Route::get('/create', [InstagramController::class, 'create']);
        Route::post('/store', [InstagramController::class, 'store']);
        Route::get('/edit/{id}', [InstagramController::class, 'edit']);
        Route::post('/update', [InstagramController::class, 'update']);
        Route::get('/delete/{id}', [InstagramController::class, 'destory']);

    });
    // ................title route......................

    Route::prefix('admin/title')->group(function () {

        Route::get('/', [TitleController::class, 'index']);
        Route::post('/update', [TitleController::class, 'update']);
    });
    // ................Multi route......................

    Route::prefix('admin/multi')->group(function () {

        Route::get('/', [MultiController::class, 'index']);
        Route::post('/update', [MultiController::class, 'update']);
    });

    // ................Settiong route......................

    Route::prefix('admin/setting')->group(function () {

        Route::get('/', [SettingController::class, 'index']);
        Route::post('/update', [SettingController::class, 'update']);
    });

    // ................Blog route......................

    Route::prefix('admin/blog')->group(function () {

        Route::get('/', [BlogController::class, 'index']);
        Route::get('/create', [BlogController::class, 'create']);
        Route::post('/store', [BlogController::class, 'store']);
        Route::get('/edit/{id}', [BlogController::class, 'edit']);
        Route::post('/update', [BlogController::class, 'update']);
        Route::get('/delete/{id}', [BlogController::class, 'destory']);

    });

});
// ................book route......................
Route::prefix('admin/book')->group(function () {

    Route::get('/', [BookController::class, 'index']);
    Route::post('/store', [BookController::class, 'store']);
    Route::get('/edit/{id}', [BookController::class, 'edit']);
    Route::post('/update', [BookController::class, 'update']);
    Route::get('/delete/{id}', [BookController::class, 'destory']);

});

require __DIR__ . '/auth.php';






Route::get('/', [UserController::class, 'home']);
Route::get('/menu', [UserController::class, 'menu']);
Route::get('/fetch-dish/{id}', [UserController::class, 'fetchdish'])->name('fetch.dish');
Route::get('fetchAllDish', [UserController::class, 'fetchallhdish'])->name('fetchAllDish');
Route::get('/about', [UserController::class, 'about']);
Route::get('/blog', [UserController::class, 'blog']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/reservation', [UserController::class, 'reservation']);
Route::get('/singleblog/{id}', [UserController::class, 'singleblog']);
Route::get('/shopdetail', [UserController::class, 'shopdetail']);


//===================================custom login================================


Route::get('/customregister', [CustomController::class, 'index'])->name('customregister');
Route::post('/customstore', [CustomController::class, 'store']);
Route::get('/customlogin', [CustomController::class, 'login'])->name('customlogin');
Route::post('/loginstore', [CustomController::class, 'loginstore']);
Route::get('/logout', [CustomController::class, 'logout']);


