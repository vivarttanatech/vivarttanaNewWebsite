<?php

use App\Http\Controllers\Auth\AuthController;
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
Route::get('/student/login',[AuthController::class,'studentLoginIndex'])->name('crm.student.login');
Route::post('/student/login',[AuthController::class,'studentLoginAuthenticate'])->name('crm.student.login.authenticate');
Route::get('/student/register',[AuthController::class,'studentRegisterIndex'])->name('crm.student.register');
Route::post('/student/register/save',[AuthController::class,'studentRegisterSave'])->name('crm.student.register.save');
//Trainer Auth Routes
Route::get('/trainer/login',[AuthController::class,'trainerLoginIndex']);
Route::post('/trainer/login',[AuthController::class,'trainerLoginAuthenticate'])->name('crm.trainer.login.authenticate');
//Admin Auth Routes
Route::get('/admin/login',[AuthController::class,'adminLoginIndex']);
Route::post('/admin/login',[AuthController::class,'adminLoginAuthenticate'])->name('crm.admin.login.authenticate');

//Logout Routes
Route::get('/student/logout',[AuthController::class,'studentDashboardLogout'])->name('crm.student.logout');
Route::get('/trainer/logout',[AuthController::class,'trainerDashboardLogout'])->name('crm.trainer.logout');
Route::get('/admin/logout',[AuthController::class,'adminDashboardLogout'])->name('crm.admin.logout');


//Student Dasbhoard routes
Route::get('/student/dashboard',[DashboardController::class,'studentDashboardIndex'])->name('name.student.dashboard.index');

//Admin Dashboard Routes
Route::get('/admin/dashboard',[DashboardController::class,'adminDashboardIndex'])->name('crm.admin.dashboard.index');

Route::get('/admin/user/student',[StudentController::class,'StudentListing'])->name('crm.admin.user.student.listing');
Route::get('/admin/user/student/add',[StudentController::class,'StudentAdd'])->name('crm.admin.user.student.add');
Route::post('/admin/user/student/save',[StudentController::class,'StudentSave'])->name('crm.admin.user.student.save');
Route::get('/admin/user/student/edit/{id}',[StudentController::class,'StudentEdit'])->name('crm.admin.user.student.edit');
Route::post('/admin/user/student/update/{id}',[StudentController::class,'StudentUpdate'])->name('crm.admin.user.student.update');
Route::post('/admin/user/student/delete/{id}',[StudentController::class,'StudentDelete'])->name('crm.admin.user.student.delete');

Route::get('/admin/user/trainer',[UserController::class,'TrainerListing'])->name('crm.admin.user.trainer.listing');
Route::get('/admin/user/trainer/add',[UserController::class,'TrainerAdd'])->name('crm.admin.user.trainer.add');
Route::post('/admin/user/trainer/save',[UserController::class,'TrainerSave'])->name('crm.admin.user.trainer.save');
Route::get('/admin/user/trainer/edit/{id}',[UserController::class,'TrainerEdit'])->name('crm.admin.user.trainer.edit');
Route::post('/admin/user/trainer/update/{id}',[UserController::class,'TrainerUpdate'])->name('crm.admin.user.trainer.update');
Route::post('/admin/user/trainer/delete/{id}',[UserController::class,'TrainerDelete'])->name('crm.admin.user.trainer.delete');

Route::get('/admin/user/admin',[AdminController::class,'AdminListing'])->name('crm.admin.user.admin.listing');
Route::get('/admin/user/admin/add',[AdminController::class,'AdminAdd'])->name('crm.admin.user.admin.add');
Route::post('/admin/user/admin/save',[AdminController::class,'AdminSave'])->name('crm.admin.user.admin.save');
Route::get('/admin/user/admin/edit/{id}',[AdminController::class,'AdminEdit'])->name('crm.admin.user.admin.edit');
Route::post('/admin/user/admin/update/{id}',[AdminController::class,'AdminUpdate'])->name('crm.admin.user.admin.update');
Route::post('/admin/user/admin/delete/{id}',[AdminController::class,'AdminDelete'])->name('crm.admin.user.admin.delete');

Route::get('/admin/class',[DashboardController::class,'ClassListing'])->name('crm.admin.class.listing');
Route::get('/admin/class/add',[DashboardController::class,'ClassAdd'])->name('crm.admin.class.add');
Route::post('/admin/class/save',[DashboardController::class,'ClassSave'])->name('crm.admin.class.save');
Route::get('/admin/class/edit/{id}',[DashboardController::class,'ClassEdit'])->name('crm.admin.class.edit');
Route::post('/admin/class/update/{id}',[DashboardController::class,'ClassUpdate'])->name('crm.admin.class.update');
Route::post('/admin/class/delete/{id}',[DashboardController::class,'ClassDelete'])->name('crm.admin.class.delete');
Route::get('/admin/class/history',[DashboardController::class,'ClassHistory'])->name('crm.admin.class.history');

Route::get('/admin/course',[DashboardController::class,'CourseListing'])->name('crm.admin.course.listing');
Route::get('/admin/course/add',[DashboardController::class,'CourseAdd'])->name('crm.admin.course.add');
Route::post('/admin/course/save',[DashboardController::class,'CourseSave'])->name('crm.admin.course.save');
Route::get('/admin/course/edit/{id}',[DashboardController::class,'CourseEdit'])->name('crm.admin.course.edit');
Route::post('/admin/course/update/{id}',[DashboardController::class,'CourseUpdate'])->name('crm.admin.course.update');
Route::post('/admin/course/history',[DashboardController::class,'CourseDelete'])->name('crm.admin.course.delete');

Route::get('/admin/curriculum',[DashboardController::class,'CurriculumListing'])->name('crm.admin.curriculum.listing');
Route::get('/admin/curriculum/add',[DashboardController::class,'CurriculumAdd'])->name('crm.admin.curriculum.add');
Route::post('/admin/curriculum/save',[DashboardController::class,'CurriculumSave'])->name('crm.admin.curriculum.save');
Route::get('/admin/curriculum/edit/{id}',[DashboardController::class,'CurriculumEdit'])->name('crm.admin.curriculum.edit');
Route::post('/admin/curriculum/update/{id}',[DashboardController::class,'CurriculumUpdate'])->name('crm.admin.curriculum.update');
Route::post('/admin/curriculum/history',[DashboardController::class,'CurriculumDelete'])->name('crm.admin.curriculum.delete');

Route::get('/admin/college',[DashboardController::class,'CollegeListing'])->name('crm.admin.college.listing');
Route::get('/admin/college/add',[DashboardController::class,'CollegeAdd'])->name('crm.admin.college.add');
Route::post('/admin/college/save',[DashboardController::class,'CollegeSave'])->name('crm.admin.college.save');
Route::get('/admin/college/edit/{id}',[DashboardController::class,'CollegeEdit'])->name('crm.admin.college.edit');
Route::post('/admin/college/update/{id}',[DashboardController::class,'CollegeUpdate'])->name('crm.admin.college.udpate');
Route::post('/admin/college/delete/{id}',[DashboardController::class,'CollegeDelete'])->name('crm.admin.college.delete');

Route::get('/admin/settings',[DashboardController::class,'Settings'])->name('crm.admin.settings.listing');
Route::post('/admin/settings/save',[DashboardController::class,'SettingsSave'])->name('crm.admin.settings.save');
