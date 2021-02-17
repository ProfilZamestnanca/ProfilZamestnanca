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
Route::post('deleteTitle', [
    'uses' => 'addController@deleteTitle'
]);
Route::post('editTitle', [
    'uses' => 'addController@storeEditTitle'
]);
Route::post('deletePublication', [
    'uses' => 'addController@deletePublication'
]);
Route::post('editPublication', [
    'uses' => 'addController@storeEditPublication'
]);
Route::post('deleteDigSkill', [
    'uses' => 'addController@deleteDigSkill'
]);
Route::post('editDigSkill', [
    'uses' => 'addController@storeEditDigSkill'
]);
Route::post('deleteSocSkill', [
    'uses' => 'addController@deleteSocSkill'
]);
Route::post('editSocSkill', [
    'uses' => 'addController@storeEditSocSkill'
]);
Route::post('deleteLab', [
    'uses' => 'addController@deleteLab'
]);
Route::post('editLab', [
    'uses' => 'addController@storeEditLab'
]);
Route::post('deleteProject', [
    'uses' => 'addController@deleteProject'
]);
Route::post('editProject', [
    'uses' => 'addController@storeEditProject'
]);
Route::post('deleteSubject', [
    'uses' => 'addController@deleteSubject'
]);
Route::post('storeEditSubject', [
    'uses' => 'addController@storeEditSubject'
]);
Route::post('editContacts', [
    'uses' => 'addController@storeEditContacts'
]);
Route::post('editStaticData', [
    'uses' => 'addController@storeEditStatic'
]);
Route::post('addPredmet', [
    'uses' => 'addController@storePredmet'
]);
Route::post('addPublication', [
    'uses' => 'addController@storePublication'
]);
Route::post('addDigSkill', [
    'uses' => 'addController@storeDigSkill'
]);
Route::post('addSocSkill', [
    'uses' => 'addController@storeSocSkill'
]);
Route::post('addLaboratorie', [
    'uses' => 'addController@storeLaboratori'
]);
Route::post('addTitle', [
    'uses' => 'addController@storeTitle'
]);
Route::post('addProject', [
    'uses' => 'addController@storeProject'
]);
Route::post('register', [
    'uses' => 'registerController@store'
]);
Route::post('profile', [
    'uses' => 'loginController@store'
]);
Route::get('logOut', [
    'uses' => 'loginController@logOut'
]);

Route::get('/edit',[\App\Http\Controllers\ZamestnanecController::class,'editProfile']);
//Route::get('/domov',[\App\Http\Controllers\ZamestnanecController::class,'getAllUsers']);
Route::get('/domov', ['uses'=>'ZamestnanecController@getAllUsers', 'as'=>'users.index']);
Route::get('/profile/{id}',[\App\Http\Controllers\ZamestnanecController::class,'getProfile']);
Route::get('/register',[\App\Http\Controllers\registerController::class,'index']);
