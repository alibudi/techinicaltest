<?php

use App\Http\Controllers\Admin\LearningController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\ClassWatchTimeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('learnings', LearningController::class);
Route::resource('packages', PackageController::class);
Route::resource('settings', SettingController::class);
Route::get('landing', [HomeController::class,'landing'])->name('landing');

Route::post('api/subscriptions', [SubscriptionController::class, 'createSubscription']);
Route::post('api/class-watch-times', [ClassWatchTimeController::class, 'recordWatchTime']);
Route::get('api/distribute-revenue', [ClassWatchTimeController::class, 'distributeRevenue']);
