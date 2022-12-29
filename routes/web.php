<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {
//     return view('landing_page');
// });

// Route::get('/dbConfig', function () {
//     return view('dbConfig');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/', function () {
    return view('landing_page');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/kontak', function () {
    return view('kontak');
});

// Route::get('/regis', function () {
//     return view('register');
// });

Route::get('/percobaan', function () {
    return view('admin.layanan.layanan');
});

Route::get('/create', function () {
    return view('admin.category.create');;
});

// Route::get('cat',[app\Http\Controllers\CategoryController::class, 'index']);
// Route::get('/redirect',[HomeController::class,'redirect']);
// Route::get('category', [CategoryController::class, 'index']);

Route::controller(CategoryController::class)->group(function(){
    Route::get('/category', 'index');
    Route::get('/category-create', 'create');
    Route::post('/category-store', 'store');
    Route::get('/category-edit-{category}', 'edit');
    Route::put('/category-update-{category}', 'update');
    Route::get('/category-delete-{category}', 'delete');
   // Route::get('category/edit/{id}', 'edit');
});