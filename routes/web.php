<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Homepagecontroller;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Storecontroller;
use App\Http\Controllers\Deletecontroller;
use App\Http\Controllers\Updatecontroller;
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

Route::get('/', [Homecontroller::class, 'index'])->name('home');
Route::get('/register', [Homecontroller::class, 'register'])->name('register');
Route::get('/login', [Homecontroller::class, 'login'])->name('login');
Route::get('/logout', [Authcontroller::class, 'logout_process'])->name('logout');

Route::post('/register', [Authcontroller::class, 'register_process'])->name('process.register');
Route::post('/login', [Authcontroller::class, 'login_process'])->middleware('cekstatus')->name('process.login');

Route::get('/homepage/home', [Homepagecontroller::class, 'home'])->name('homepage.home');
Route::get('/homepage/home/items/{id}', [Homepagecontroller::class, 'items']);
Route::post('/homepage/home/items', [Storecontroller::class, 'orders'])->name('order');
Route::get('/homepage/cart', [Homepagecontroller::class, 'cart'])->name('homepage.cart');
Route::get('/homepage/cart/delete/{id}', [Deletecontroller::class, 'orders']);
Route::get('/homepage/cart/checkout/{id}', [Updatecontroller::class, 'orders']);
Route::get('/homepage/cart/success', [Homepagecontroller::class, 'checkoutsuccess'])->name('checkout.success');
Route::get('/homepage/profil', [Homepagecontroller::class, 'profil'])->name('homepage.profil');
Route::post('/homepage/profil', [Updatecontroller::class, 'profil'])->name('update.account');
Route::get('/homepage/profil/save', [Homepagecontroller::class, 'savedprofile'])->name('savedprofile.success');
Route::get('/homepage/account-maintenance', [Homepagecontroller::class, 'account_maintenance'])->middleware('admin')->name('homepage.account.maintenance');
Route::get('homepage/account-maintenance/update-role/{id}', [Updatecontroller::class, 'account_maintenance'])->middleware('admin');
Route::post('homepage/account-maintenance/update-role', [Updatecontroller::class, 'update_role'])->middleware('admin')->name('update.role');
Route::get('/homepage/account-maintenance/save', [Homepagecontroller::class, 'savedaccount'])->middleware('admin')->name('savedaccount.success');
Route::get('/homepage/account-maintenance/delete/{id}', [Deletecontroller::class, 'account_maintenance'])->middleware('admin');


