<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 

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
    return view('welcome');
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

// routes/web.php 
  
Route::get('/', function () { 
    return view('welcome'); 
}); 
  
Route::middleware(['auth:sanctum', 'verified'])->group(function () { 
    Route::resource('posts', PostController::class); 
});
