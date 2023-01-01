<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactNotifController;

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
Route::get('/user', function () {
    return view('user.order.index');
});

Route::get('/we', function () {
    return view('admin.dashboardAdmin');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboardAdmin');
    })->name('dashboard');
    //Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category', 'index');
        Route::get('/category-create', 'create');
        Route::post('/category-store', 'store');
        Route::get('/category-edit-{category}', 'edit');
        Route::put('/category-update-{category}', 'update');
        Route::get('/category-delete-{category}', 'delete');
       // Route::get('category/edit/{id}', 'edit');
    });
    Route::controller(ServiceController::class)->group(function(){
        Route::get('/service', 'index');
        Route::get('/service-create', 'create');
        Route::post('/service-store', 'store');
        Route::get('/service-edit-{service}', 'edit');
        Route::put('/service-update-{service}', 'update');
        Route::get('/service-delete-{service}', 'delete');
       // Route::get('category/edit/{id}', 'edit');
    });
});

Route::controller(UserController::class)->group(function(){
    Route::get('/user-order', 'index');
    // Route::get('/service-create', 'create');
    // Route::post('/service-store', 'store');
    // Route::get('/service-edit-{service}', 'edit');
    // Route::put('/service-update-{service}', 'update');
    // Route::get('/service-delete-{service}', 'delete');
   // Route::get('category/edit/{id}', 'edit');
});

Route::controller(ContactController::class)->group(function(){
   // Route::get('/contact', 'index');
    Route::get('/contact-create', 'create');
    Route::post('/contact-store', 'store');
    // Route::get('/service-edit-{service}', 'edit');
    // Route::put('/service-update-{service}', 'update');
    // Route::get('/service-delete-{service}', 'delete');
   // Route::get('category/edit/{id}', 'edit');
});

Route::controller(ContactNotifController::class)->group(function(){
    Route::get('/contact-notif', 'index');
    // Route::get('/contact-create', 'create');
    // Route::post('/contact-store', 'store');
     Route::get('/contact-notif-view-{contact}', 'view');
     // Route::put('/service-update-{service}', 'update');
     Route::get('/contact-notif-delete-{contact}', 'delete');
    // Route::get('category/edit/{id}', 'edit');
 });
//Route::get('/contact',[ContactController::class,'index']);
Route::get('/admin',[HomeController::class,'admin']);
Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/faq', function () {
    return view('faq');
});

// Route::get('/kontak', function () {
//     return view('kontak');
// });

// Route::get('/regis', function () {
//     return view('register');
// });

Route::get('/percobaan', function () {
    return view('admin.layanan.layanan');
});

Route::get('/create', function () {
    return view('admin.category.create');;
});

