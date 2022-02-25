<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
    return view('home', [
        'title'=>'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title'=>'About'
    ]);
});
Route::get('/blog', function () {
    return view('blog', [
        'title'=>'Blog'
    ]);
});
// Route::get('/login', function () {
//     return view('register.login');
// });
Route::get('/login', [LoginController::class, 'index'])->name('login') -> middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registration', [RegisterController::class, 'store']);

Route::get('/register', function () {
    return view('register.register');
});
