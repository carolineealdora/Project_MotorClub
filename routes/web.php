<?php

use App\Http\Controllers\Controller;
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
//     return view('index');
// });

Route::get('/', [Controller::class, 'index']);
Route::get('/about', [Controller::class, 'about']);
Route::get('/visi-misi', [Controller::class, 'visi_misi']);
Route::get('/profile', [Controller::class, 'profile']);
Route::get('/products-services', [Controller::class, 'products_services']);
Route::get('/clients', [Controller::class, 'clients']);
Route::get('/contact', [Controller::class, 'contact']);
Route::get('/articles', [Controller::class, 'articles']);
Route::get('/events', [Controller::class, 'events']);
Route::get('/gallery', [Controller::class, 'gallery']);
Route::get('/signin', [Controller::class, 'signin']);
Route::get('/signup', [Controller::class, 'signup']);
