<?php


use App\Http\Controllers;
use App\Http\Controllers\CrudController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


// //route parameters


/* Route::get('/show_num/{id}', function ($id) {
    return $id;
}) -> name('a'); */


// Route::get('/show-str/{id?}', function () {
//     return 'welcome';
// }) -> name('b'); /*to use it instead of the long url*/


//route name
/* route::
    namespace ('Front')->group(function(){

        //all route only access controller or methods in folder name front
        Route::
        get('users1', 'UserController@showUsername');
    }); */
/**
 * prefix Route
 */
Route::group(['prefix' => 'sort','middleware' => 'auth'], function () {
    //set of routes

    Route::get('sort', function () {
        return 'work';
    });
    Route::get('show', 'UserController@showUsername');
    Route::delete('delete', 'UserController@showUsername');
    Route::get('edit', 'UserController@showUsername');
    Route::put('update', 'UserController@showUsername');
});

/**
* middleware Route
*/
/* Route::get('check', function () {
    return 'middleware';
})->middleware('auth'); */

/*
Route::get('user', function () {
    return 'yes';
}); */

// Route::get('hoh', 'SecondController@showString');

/* Route::group(['namespace' => 'Front'], function () {
    Route::get('first', 'Front\userController@showUsername');
})-> name('first'); */

Route::group(['namespace' => 'App\Http\Controllers\Front'], function () {
    Route::get('second', 'secondController@showString') ->middleware('auth');
    Route::get('second0', 'secondController@showString0');
    Route::get('second1', 'SecondController@showString1');
    Route::get('second2', 'SecondController@showString2');
});

/* Route::get('login', function () {
    return 'must be login to access this route';
})-> name('login'); */

// Route::get('loads', 'Front\SecondController@showString');


// Route::get('users', [UserController::class, 'showUsername']);

// Route::get('user', 'App\Http\Controllers\SecondController@showString0');

//////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('news', 'NewsController');

/* Route::get('news', 'NewsController@index');
Route::post('news', 'NewsController@store');
Route::get('news/create', 'NewsController@create');
Route::get('news/{id}/edit', 'NewsController@edit');
Route::post('news/{id}', 'NewsController@update');
Route::delete('news/{id}', 'NewsController@delete'); */




Route::get('index', '\App\Http\Controllers\Front\UserController@getIndex');



Route::get('/', function () {
    /* $data = [];
    $data['id'] = 5;
    $data['name'] = 'hytham'; */
    return view('welcome');
});


route::get('/landing', function () {
    return view('landing');
});

route::get('/text', function () {
    return view('welcome');
});
route::get('/privacy', function () {
    return view('privacy');
});
route::get('/about', function () {
    return view('about');
});
route::get('/login', function () {
    return view('login');
});
route::get('/redirect/{service}', '\App\Http\Controllers\SocialController@redirect');
route::get('/callback/{service}', '\App\Http\Controllers\SocialController@callback');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') ->middleware('verified');


Route::get('/fillable','App\Http\Controllers\CrudController@getOffers');

Route::group(['prefix' => 'offers'], function () {
        Route::get('/store','App\Http\Controllers\CrudController@store');
        Route::get('create', 'App\Http\Controllers\CrudController@create');
        Route::get('all', 'App\Http\Controllers\CrudController@getAllOffers')->name('offers.all');
        Route::post('store', 'App\Http\Controllers\CrudController@store')->name('offers.store');
        Route::get('edit/{offer_id}', 'App\Http\Controllers\CrudController@editOffer');
        Route::get('delete/{offer_id}', 'App\Http\Controllers\CrudController@delete')->name('offers.delete');
        Route::post('update/{offer_id}', 'App\Http\Controllers\CrudController@updateOffer')->name('offers.update');


    });

Route::get('youtube','App\Http\Controllers\CrudController@getVideo');

//Begin Ajax routes

Route::group(['prefix' => 'ajax-offers'], function () {
    Route::get('create','App\Http\Controllers\OfferController@create');
    Route::post('store','App\Http\Controllers\OfferController@store')->name('ajax.offers.store');
});
//End Ajax routes




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// dd('welcome');
