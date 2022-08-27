<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/hello/{name}', function ($name){
    return 'Hello ' . $name;

});

Route::get('/search', function(Request $request){
    return $request->all();     // Juda ko'p o'zgaruvchilar routeda joylashib qolganda ishlatiladi
});

/*
Route::get('/search', function(Request $request){
    $name = $request->get('name', 'Salim');
    $age = $request->get('age', 34);
    return $name. ' ismli foydalanuvchi ' .$age. ' yoshda';
});


Route::get('/{action}/{name?}', function ($action,$name=null){
    return $action. ' ' . $name;

});
*/


Route::group(['prefix'=>'dashboard'], function(){
    Route::get('/users', function(){
        return 'Users dashboard';
    });

    Route::get('/statistic', function(){
        return 'Statistic dashboard';
    });
});