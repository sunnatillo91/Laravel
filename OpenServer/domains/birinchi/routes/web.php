<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ShowProfileController;

// use App\Http\Controllers\UserController;
// use App\Http\Controllers\ShowProfileController;
// use App\Http\Controllers\HomeController2;

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

Route::get('/', function(){
    return view('welcome');
});

Route::resource('laboratories', LaboratoryController::class);

// Route::resource('companies', CompaniesController::class);

// Route::get('/user/{name?}', [UserController::class,'show']);

// // Route::get('/users', [UserController::class,'list']);

// Route::get('/show/{id}', ShowProfileController::class);

// // Route::get('/home', [HomeController2::class, 'index']);

// // Route::get('/about', [HomeController2::class, 'about']);

// // Route::get('/members', [HomeController2::class, 'members']); -->
