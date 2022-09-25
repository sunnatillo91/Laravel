<?php

use App\Http\Controllers\CompaniesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\HomeController;
use App\Models\Company;

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

Route::get('/companies', [CompaniesController::class, 'index']);


Route::resource('companies', CompaniesController::class);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/members', [HomeController::class, 'members']);

Route::get('/user/{name?}', [UserController::class, 'show']);

Route::get('/home', [HomeController::class, 'index']);


Route::get('/users', [UserController::class, 'list']);

Route::get('/show/{name}', [ShowProfileController::class, 'show']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', [ShowProfileController::class,'show']);






// Route::get('/search', function (Request $request) {
//     return $request->all();
// });

// Route::group(['prefix'=>'dashboard'], function(){
//     Route::get('/users', function(){
//         return 'Users dashboard';
//     });

//     Route::get('/statistic', function(){
//         return 'Statistic dashboard';
//     });
// });

// // Route::get('/search', function (Request $request) {
// //     $name = $request->get('name','Shaxzod');
// //     $age = $request->get('age',31);
// //     return $name.' ismli foydalanuvchi ' . $age. ' yoshda';
// // });

// Route::get('/{action}/{name?}', function ($action, $name=null) {
//     return $action.$name;
// });

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Hello, user ' . $name;
// });

