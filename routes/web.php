<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Homepagecontroller;
use App\Http\Controllers\Authcontroller;
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

Route::post('/register', [Authcontroller::class, 'register_process'])->name('process.register');

Route::get('/homepage/home', [Homepagecontroller::class, 'home'])->name('homepage.home');
Route::get('/homepage/home/items/{id}', [Homepagecontroller::class, 'items']);
