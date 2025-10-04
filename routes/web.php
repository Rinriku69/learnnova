<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyCoursesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(HomeController::class)
    ->prefix('/home')
    ->name('home.')
    ->group(static function (): void {
        route::get('', 'home')->name('main');
    });

Route::controller(MyCoursesController::class)
    ->prefix('/my-courses')
    ->name('my-courses.')
    ->group(static function (): void {
        route::get('','MyCourses')->name('my-courses');
    });
