<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\FacturaController;
use App\Models\Factura;

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

Route::get('/', function () {
    
    return view('landing'); 
})->name('home');





Route::get('/2', function () {
    return view('profile'); 
    
})->name('about-us');

//Usuario

Route::get('/useruid/{id}', [UserController::class, 'profile'])->name('profile');



//Factura

Route::post('/factura', [FacturaController::class, 'store'])->name('facturar');
Route::get('/productos/{id}', [ProductsController::class, 'card'])->name('añadir');


//Productos
Route::get('/productos', [ProductsController::class, 'index'])->name('productos');
Route::get('/productsConfig', [ProductsController::class, 'indexStore'])->name('products.indexStore');
Route::post('/productsConfig', [ProductsController::class, 'store'])->name('products.store');
Route::post('/productos', [ProductsController::class, 'edit'])->name('products.edit');
Route::patch('update-cart', [ProductsController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');
//Registrarse
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('user.store');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('signin');
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
    
