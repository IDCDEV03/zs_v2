<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\API\TambonController;
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

Route::get('/home', $controller_path . '\UserController@home_index')->name('home.index');

Route::get('/information', $controller_path . '\UserController@information')->name('home.information');

Route::get('/information2', $controller_path . '\UserController@information2')->name('home.information2');

Route::get('/information3', $controller_path . '\UserController@information3')->name('home.information3');

Route::get('/information4', $controller_path . '\UserController@information4')->name('home.information4');

Route::get('/products', $controller_path . '\UserController@products')->name('home.products');

Route::post('/save_information1', $controller_path . '\UserController@information1_save')->name('home.saveinformation1');

