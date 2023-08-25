<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\API\TambonController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;
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


/** GUEST */


$controller_path = 'App\Http\Controllers';

Route::get('/', $controller_path . '\LoginController@login_show')->name('login.show');


/** LOGIN */

Route::get('/signin', $controller_path . '\LoginController@signin_show')->name('signin_show');


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

Route::get('/id_products', $controller_path . '\GuestController@guest_products')->name('guest.products');

Route::get('/id_social', $controller_path . '\GuestController@guest_social')->name('guest.social');

/* insert data */
Route::post('/save_information1/{id}', $controller_path . '\UserController@information1_save')->name('home.saveinformation1');

Route::post('/save_information2/{id}', $controller_path . '\UserController@information2_save')->name('home.saveinformation2');

Route::post('/save_information4/{id}', $controller_path . '\UserController@information4_save')->name('home.saveinformation4');

/* Middleware User */ 
Route::group(['middleware' => 'UserLogin'], function () {
$controller_path = 'App\Http\Controllers';

Route::get('/dashboard', $controller_path . '\UserController@dashboard')->name('home.dashboard');

Route::get('/products', $controller_path . '\UserController@products')->name('home.products');

Route::get('/status', $controller_path . '\UserController@sub_status')->name('home.sub_status');

/** Drone */
Route::get('/drone', $controller_path . '\UserDashboardController@drone_page')->name('home.drone');

Route::get('/drone_detail/{id}', $controller_path . '\UserDashboardController@drone_detail')->name('home.drone_detail');

Route::POST('/drone_sub', $controller_path . '\UserDashboardController@drone_sub')->name('home.drone_sub');

Route::get('/drone_agras/{id}', $controller_path . '\UserDashboardController@drone_agras')->name('home.drone_agras');

/** End Drone */

Route::get('/products_driver', $controller_path . '\UserDashboardController@products_driver')->name('home.products_dl');

Route::get('/dl/{id}', $controller_path . '\UserDashboardController@dl_detail')->name('home.dl_detail');

Route::get('/dl_type/{type}/{branch}', $controller_path . '\UserDashboardController@dl_type')->name('home.dl_type');

Route::POST('/driving_sub', $controller_path . '\UserDashboardController@driving_sub')->name('home.driving_sub');

/** END Driv */

Route::get('/attitudetest', $controller_path . '\UserController@attitudetest')->name('home.attitudetest');

Route::get('/associate', $controller_path . '\UserController@associate')->name('home.associate');

/** TZ LIST */
Route::get('/tz', $controller_path . '\UserController@tz_list')->name('home.tz_list');

Route::get('/tz_group/{id}', $controller_path . '\UserController@tz_group')->name('home.tz_group');

Route::get('/tz_detail/{id}', $controller_path . '\UserDashboardController@tz_detail')->name('home.tz_detail');

});



/** Admin Route */
Route::group(['middleware' => 'isAdmin'], function () {

Route::get('/back', [AdminController::class, 'admin_index'])->name('admin.dashboard');
Route::get('/users', [AdminController::class, 'admin_listuser'])->name('admin.listuser');
Route::get('/member/{id}', [AdminController::class, 'member_detail'])->name('admin.memberdetail');

Route::get('/branch_list', [AdminDashboardController::class, 'branch_list'])->name('admin.branch_list');

Route::get('/branch_edit/{id}', [AdminDashboardController::class, 'branch_edit'])->name('admin.branch_edit');

Route::POST('/branch_update', [AdminDashboardController::class, 'branch_update'])->name('admin.branch_update');

Route::get('/dl_course', [AdminDashboardController::class, 'dl_course'])->name('admin.dl_course');

Route::get('/dl_edit/{id}', [AdminDashboardController::class, 'dl_course_edit'])->name('admin.dl_course_edit');

Route::POST('/dl_course_update', [AdminDashboardController::class, 'dl_course_update'])->name('admin.dl_course_update');

Route::get('/drones', [AdminDashboardController::class, 'drone_list'])->name('admin.drone_list');




});