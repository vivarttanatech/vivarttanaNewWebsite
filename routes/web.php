<?php

use App\Http\Controllers\Auth\AuthContoller;
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

Route::get('/student/login',[AuthContoller::class,'studentLoginIndex']);
Route::get('/student/register',[AuthContoller::class,'studentRegisterIndex']);
Route::post('/student/register/save',[AuthContoller::class,'studentRegisterSave'])->name('crm.student.register');

Route::get('/dashboard',function()
{
    return view('crm.student.home');
});
