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
    'uses' => 'deleteController@deleteTitle'
]);
Route::post('editTitle', [
    'uses' => 'editController@storeEditTitle'
]);
Route::post('deletePublication', [
    'uses' => 'deleteController@deletePublication'
]);
Route::post('editPublication', [
    'uses' => 'editController@storeEditPublication'
]);
Route::post('deleteDigSkill', [
    'uses' => 'deleteController@deleteDigSkill'
]);
Route::post('editDigSkill', [
    'uses' => 'editController@storeEditDigSkill'
]);
Route::post('deleteSocSkill', [
    'uses' => 'deleteController@deleteSocSkill'
]);
Route::post('editSocSkill', [
    'uses' => 'editController@storeEditSocSkill'
]);
Route::post('deleteLab', [
    'uses' => 'deleteController@deleteLab'
]);
Route::post('editLab', [
    'uses' => 'editController@storeEditLab'
]);
Route::post('deleteProject', [
    'uses' => 'deleteController@deleteProject'
]);
Route::post('editProject', [
    'uses' => 'editController@storeEditProject'
]);
Route::post('deleteSubject', [
    'uses' => 'deleteController@deleteSubject'
]);
Route::post('storeEditSubject', [
    'uses' => 'editController@storeEditSubject'
]);
Route::post('editContacts', [
    'uses' => 'editController@storeEditContacts'
]);
Route::post('editStaticData', [
    'uses' => 'editController@storeEditStatic'
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
