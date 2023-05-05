<?php
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\Ecommcontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Models\Ecomm;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// use App\Http\Controllers\MywebController;

// Route::get('/user', [MywebController::class, 'index'])->name('user.index');
// Route::get('/user/create', [MywebController::class, 'create'])->name('user.create');
// Route::post('/user', [MywebController::class, 'store'])->name('user.store');
// Route::get('/user/{user}', [MywebController::class, 'show'])->name('user.show');
// Route::get('/users{user}/edit', [MywebController::class, 'edit'])->name('user.edit');
// Route::put('/users{user}', [MywebController::class, 'update'])->name('user.update');
// Route::delete('/users{user}', [MywebController::class, 'destroy'])->name('user.destroy');

// Route::resource('posts',postcontroller::class);

// Route::resource('Ecomms',Ecommcontroller::class);

// route to main admin index
Route::get('/admin', function () {
    return view('admin.index');
});


// Products routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::post('/user', [MywebController::class, 'store'])->name('user.store');


// Brands routes
Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('/brands/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('/brands', [BrandController::class, 'store'])->name('brands.store');

// categories routes

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
