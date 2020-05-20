<?php

use App\Http\Controllers\DesignController;
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

// design routes
Route::get('/', 'DesignController@index');
Route::get('/portofolio', 'DesignController@showporto');
Route::get('/skills', 'DesignController@showskills');
Route::get('/contact', 'DesignController@showcontact');
// add new contact
Route::post('/contact/add' , 'DesignController@addcontact' )->name('add.contact');


Auth::routes();



