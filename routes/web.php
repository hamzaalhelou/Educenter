<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Admin\JournalistController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeacherController;

Route::prefix('admin')->name('admin.')->middleware('auth','checkuser')->group(function(){
Route::get('/',[AdminController::class,'index'])->name('index');
Route::resource('sliders',SliderController::class);
Route::resource('features',FeaturesController::class);
Route::resource('courses',CourseController::class);
Route::resource('teacher',TeacherController::class);
Route::resource('events',EventController::class);
Route::resource('journalists',JournalistController::class);});
Route::view('/','welcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
