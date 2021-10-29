<?php

use App\Http\Controllers\Auth\AuthContoller;
use App\Http\Controllers\CRM\DashboardController;
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
    return view('vivarttana.index');
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('test',function(){
    return view("test");
});

Route::get('home',function(){
    return view("vivarttana.index");
});


Route::get('prasanna',function(){
    return view("vivarttana.prasanna");
});
//Student Auth Routes
Route::get('/student/login',[AuthContoller::class,'studentLoginIndex'])->name('crm.student.login');
Route::post('/student/login',[AuthContoller::class,'studentLoginAuthenticate'])->name('crm.student.login.authenticate');
Route::get('/student/register',[AuthContoller::class,'studentRegisterIndex'])->name('crm.student.register');
Route::post('/student/register/save',[AuthContoller::class,'studentRegisterSave'])->name('crm.student.register.save');
//Trainer Auth Routes
Route::get('/trainer/login',[AuthContoller::class,'trainerLoginIndex']);
Route::post('/trainer/login',[AuthContoller::class,'trainerLoginAuthenticate'])->name('crm.trainer.login.authenticate');
//Admin Auth Routes
Route::get('/admin/login',[AuthContoller::class,'adminLoginIndex']);
Route::post('/admin/login',[AuthContoller::class,'adminLoginAuthenticate'])->name('crm.admin.login.authenticate');

//Logout Routes
Route::get('/student/logout',[AuthContoller::class,'studentDashboardLogout'])->name('crm.student.logout');
Route::get('/trainer/logout',[AuthContoller::class,'trainerDashboardLogout'])->name('crm.trainer.logout');
Route::get('/admin/logout',[AuthContoller::class,'adminDashboardLogout'])->name('crm.admin.logout');


//Student Dasbhoard routes
Route::get('/student/dashboard',[DashboardController::class,'studentDashboardIndex'])->name('name.student.dashboard.index')->middleware('auth');
Route::get('/admin/dashboard',[DashboardController::class,'adminDashboardIndex'])->name('crm.admin.dashboard.index')->middleware('auth');
