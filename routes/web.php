<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\API\TambonController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$controller_path = 'App\Http\Controllers';

Route::get('/', function () {
    return view('welcome');
});

/** LOGIN */

Route::get('/login', $controller_path . '\LoginController@login_show')->name('login.show');
Route::post('/login', $controller_path . '\LoginController@login')->name('login.perform');
Route::get('/consent', $controller_path . '\RegisterController@consent')->name('consent');
Route::POST('/consent_save', $controller_path . '\RegisterController@consent_save')->name('home.consent_save');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

/** User Class */
Route::get('/home', $controller_path . '\UserController@home_index')->name('home.index');

Route::get('/information/{id}', $controller_path . '\UserController@information')->name('home.information');

Route::get('/information2/{id}', $controller_path . '\UserController@information2')->name('home.information2');

Route::get('/information3/{id}', $controller_path . '\UserController@information3')->name('home.information3');

Route::get('/information4/{id}', $controller_path . '\UserController@information4')->name('home.information4');

Route::get('/complete', $controller_path . '\UserController@complete_page')->name('home.complete');

/* insert data */
Route::post('/save_information1/{id}', $controller_path . '\UserController@information1_save')->name('home.saveinformation1');

Route::post('/save_information2/{id}', $controller_path . '\UserController@information2_save')->name('home.saveinformation2');

Route::post('/save_information4/{id}', $controller_path . '\UserController@information4_save')->name('home.saveinformation4');

/* Middleware User */ 
Route::group(['middleware' => 'UserLogin'], function () {
$controller_path = 'App\Http\Controllers';

Route::get('/dashboard', $controller_path . '\UserController@dashboard')->name('home.dashboard');

Route::get('/products', $controller_path . '\UserController@products')->name('home.products');

Route::get('/products_driver', $controller_path . '\UserDashboardController@products_driver')->name('home.products_dl');

Route::get('/attitudetest', $controller_path . '\UserController@attitudetest')->name('home.attitudetest');

Route::get('/associate', $controller_path . '\UserController@associate')->name('home.associate');

});



/** Admin Route */
Route::group(['middleware' => 'isAdmin'], function () {

Route::get('/back', [AdminController::class, 'admin_index'])->name('admin.dashboard');
Route::get('/users', [AdminController::class, 'admin_listuser'])->name('admin.listuser');
Route::get('/member/{id}', [AdminController::class, 'member_detail'])->name('admin.memberdetail');

});