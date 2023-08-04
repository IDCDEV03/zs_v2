<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\API\TambonController;
use App\Http\Controllers\AdminController;
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

/* Line link */ 

Route::get('/home', $controller_path . '\UserController@home_index')->name('home.index');

Route::get('/information', $controller_path . '\UserController@information')->name('home.information');

Route::get('/information2/{id}', $controller_path . '\UserController@information2')->name('home.information2');

Route::get('/information3/{id}', $controller_path . '\UserController@information3')->name('home.information3');

Route::get('/information4/{id}', $controller_path . '\UserController@information4')->name('home.information4');

Route::get('/dashboard', $controller_path . '\UserController@dashboard')->name('home.dashboard');

Route::get('/products', $controller_path . '\UserController@products')->name('home.products');

Route::get('/attitudetest', $controller_path . '\UserController@attitudetest')->name('home.attitudetest');

Route::get('/associate', $controller_path . '\UserController@associate')->name('home.associate');

/* insert data */
Route::post('/save_information1', $controller_path . '\UserController@information1_save')->name('home.saveinformation1');

Route::post('/save_information2/{id}', $controller_path . '\UserController@information2_save')->name('home.saveinformation2');

Route::post('/save_information4/{id}', $controller_path . '\UserController@information4_save')->name('home.saveinformation4');

/** Admin Route */

Route::get('/back', [AdminController::class, 'admin_index'])->name('admin.dashboard');
Route::get('/users', [AdminController::class, 'admin_listuser'])->name('admin.listuser');
Route::get('/member/{id}', [AdminController::class, 'member_detail'])->name('admin.memberdetail');