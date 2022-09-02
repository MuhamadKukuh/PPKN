<?php

use App\Http\Controllers\blogController;
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

Route::group(['middleware' => 'guest'], function(){ 
    Route::get('/', [blogController::class, 'index'])->name('myBlog');
    Route::get('/categories/{id}', [blogController::class, 'show'])->name('myBlog_show');
});
