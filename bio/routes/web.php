<?php

use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

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
    return view('front.home');
});

Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],
function(){
Route::get('/', function () {
    return view('admin.index');
})->name('admin.index');
Route::get('algorithmEditForm/{id}', 'App\Http\Controllers\AlgorithmsController@algorithmEditForm')->name('algorithmEditForm');
Route::POST('/editAlgorithms/{id}', 'App\Http\Controllers\AlgorithmsController@editAlgorithms')->name('editAlgorithms');
Route::get('bookEditForm/{id}', 'App\Http\Controllers\BooksController@bookEditForm')->name('bookEditForm');
Route::POST('/editBooks/{id}', 'App\Http\Controllers\BooksController@editBooks')->name('editBooks');
Route::resource('algorithm','App\Http\Controllers\AlgorithmsController');
Route::resource('book','App\Http\Controllers\BooksController');

});
Route::get('/algorithm_details/{id}', 'App\Http\Controllers\HomeController@algorithm_details');
Route::get('/book_details/{id}', 'App\Http\Controllers\HomeController@book_details');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('addToWishList', 'App\Http\Controllers\HomeController@wishList')->name('addToWishList');


Route::get('/wishlist', 'App\Http\Controllers\HomeController@View_wishList');
Route::get('/removeWishList/{id}', 'App\Http\Controllers\HomeController@removeWishList');
Route::get('/removeWishList/{id}', 'App\Http\Controllers\HomeController@removeWishList');
Route::POST('/comment/{id}', ['uses'=> 'App\Http\Controllers\BooksController@addComment'])->name('comment');
Route::post('search', ['as' => 'search', 'uses' => 'App\Http\Controllers\BooksController@search']);

Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout');
// Route::get('/profilePicture', 'App\Http\Controllers\HomeController@getProfileAvatar')->name('profileAvatar');
// Route::post('/profilePicture', 'App\Http\Controllers\HomeController@ProfilePictureUpload')->name('profileAvatar');

// Route::get('login', 'App\Http\Controllers\Auth\LoginController@login');

?>
