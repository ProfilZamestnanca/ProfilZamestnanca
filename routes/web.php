<?php

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

Route::get('/', function () {
    return view('welcome');
});

//nefunguje
Route::get('zamMVC',[\App\Http\Controllers\ZamestnanecController::class, 'index']);

Route::get('/zamVC/edit/{id}', [\App\Http\Controllers\ZamestnanecController::class, 'edit']);


//view and controller
Route::get('zamVC', [\App\Http\Controllers\ZamestnanecController::class, 'show']);

// view
Route::get('zamV', function () {

    $zam = DB::table('zamestnanci')->get();

    return view('zamestnanec', ['petani' => $zam]);
});

