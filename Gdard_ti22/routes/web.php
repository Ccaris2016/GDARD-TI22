<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Selector;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\GetController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PutController;
use App\Http\Controllers\DeleteController;


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

Route::get('/selector', [Selector::class, 'listaDB']);

Route::get('/getMethod/{api}/{tabla}/{parametros}', [GetController::class, 'methodGet'])->where(['parametros'=>'.*']);

Route::get('/postMethod/{api}/{tabla}/{parametros}', [PostController::class, 'methodPost'])->where(['parametros'=>'.*']);

Route::get('/putMethod/{api}/{tabla}/{columnas}/{parametros}/{condicion}/{valor}', [PutController::class, 'methodPut'])->where(['parametros'=>'.*'], ['columnas'=>'.*']);

Route::get('/deleteMethod/{api}/{tabla}/{columna}/{valor}', [DeleteController::class, 'methodDelete'])->where(['columna'=>'.*']);

/*
Route::get('/createApi/{name}', function ($name) {
    return Storage::disk('local')->put('/apis.json',$name);
});
*/
