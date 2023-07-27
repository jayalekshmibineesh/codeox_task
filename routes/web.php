<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/index_admin',[HomeController::class,'index_admin'])->name('index_admin');
Route::get('/admin_dashboard',[HomeController::class,'admin_dashboard'])->name('admin_dashboard');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/admin_login',[LoginController::class,'admin_login'])->name('admin_login');
Route::get('/user_register',[HomeController::class,'user_register'])->name('user_register');
Route::post('/user_reg',[HomeController::class,'user_reg'])->name('user_reg');
Route::get('/customer_register',[HomeController::class,'customer_register'])->name('customer_register');
Route::post('/custom_reg',[HomeController::class,'custom_reg'])->name('custom_reg');
Route::get('/user_login',[LoginController::class,'user_login'])->name('user_login');
Route::post('/showuser_login',[LoginController::class,'showuser_login'])->name('showuser_login');
Route::get('/userhome',[HomeController::class,'userhome'])->name('userhome');
Route::get('/customer_login',[LoginController::class,'customer_login'])->name('customer_login');
Route::post('/cust_login',[LoginController::class,'cust_login'])->name('cust_login');
Route::get('/customer_home',[HomeController::class,'customer_home'])->name('customer_home');
Route::get('/product_registration',[ProductController::class,'product_registration'])->name('product_registration');
Route::post('/product_reg',[ProductController::class,'product_reg'])->name('product_reg');
Route::get('/adminview_products',[HomeController::class,'adminview_products'])->name('adminview_products');
Route::get('/deleteproduct/{id}',[ProductController::class,'deleteproduct'])->name('deleteproduct');
Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
Route::post('/product_update/{id}',[ProductController::class,'product_update'])->name('product_update');
Route::post('/update_status/{id}',[ProductController::class,'update_status'])->name('update_status');