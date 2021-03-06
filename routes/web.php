<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function (){

    return view('admin.index');
});

Route::resource('admin/users', 'AdminUsersController');
Route::get('home',[\App\Http\Controllers\AdminUsersController::class, 'index']);
Route::get('admin/users/create', 'AdminUsersController@create');
//Route::get('edit',[\App\Http\Controllers\AdminUsersController::class, 'edit']);
Route::get('admin/users/edit/{id}', 'AdminUsersController@edit');

// Route::group(['middleware'=>'admin'], function(){

//     Route::resource('admin/users', 'AdminUsersController');

    
// });


Route::resource('/admin/posts','AdminPostsController');




