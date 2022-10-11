<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/createApi/{name}', function ($name) {
    return Storage::disk('local')->put($name.'/config.php','');
});

/*
Route::get('/createApi/{name}', function ($name) {
    return Storage::disk('local')->put('/apis.json',$name);
});
*/
