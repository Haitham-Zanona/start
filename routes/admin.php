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

// Route::get('/', function () {
//     return view('welcome');
// });


//route parameters


Route::get('/admin1', function () {
    return 'hello admin';
}) -> name('a');


// Route::get('/show_str/{id?}', function () {
//     return 'welcome';
// }) -> name('b'); /*to use it instead of the long url*/


