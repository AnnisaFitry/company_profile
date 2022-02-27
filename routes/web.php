<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageCont;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about_us', function () {
    return view('about');
});
Route::prefix('product')->group(function(){
    Route::get('/1', function () {
        return view('pd_edu');
    });
    Route::get('/2', function () {
        return view('pd_kids');
    });
    Route::get('/3', function () {
        return view('pd_story');
    });
    Route::get('/4', function () {
        return view('pd_song');
    });
});
Route::prefix('program')->group(function(){
    Route::get('/1', function () {
        return view('pro_karir');
    });
    Route::get('/2', function () {
        return view('pro_magang');
    });
    Route::get('/3', function () {
        return view('pro_kunjndus');
    });
});
Route::get('/news/{id?}', function ($id = 1) {
    return view('new');
});
Route::get('/news/{id?}', function ($id = 2) {
    return view('newedu');
});
Route::get('/ContactUs', [PageCont::class, 'ContactUs']);
