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
Route::get('/user', [App\Http\Controllers\UserController::class, 'show']);
Route::get('/user/{user}', [App\Http\Controllers\UserController::class, 'show']);

Route::get('/post', [App\Http\Controllers\postController::class, 'index']);
Route::get('/post/{post}', [App\Http\Controllers\postController::class, 'show']);

Route::get('/users', function(){
    return 'Leo';
});

Route::get('/users/{id}', function($id){
    return 'Leo'.$id;
});

Route::get('/users/{id}/tags', function($id){
    return 'Leo'.$id.' tags';
});
Route::get('/business', [\App\Http\Controllers\BusinessController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});