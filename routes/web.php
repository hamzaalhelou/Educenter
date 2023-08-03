<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Admin\JournalistController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())->group(function(){

    Route::prefix('admin')->name('admin.')->middleware('auth','checkuser')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::post('/settings', [AdminController::class, 'settings_data'])->name('settings_data');
    Route::resource('sliders',SliderController::class);
    Route::resource('features',FeaturesController::class);
    Route::resource('courses',CourseController::class);
    Route::resource('teacher',TeacherController::class);
    Route::resource('events',EventController::class);
    Route::resource('journalists',JournalistController::class);});
    Route::view('/','welcome');
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
