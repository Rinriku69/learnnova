<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\MyCoursesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.main');
});


Route::controller(HomeController::class)
    ->prefix('/home')
    ->name('home.')
    ->group(static function (): void {
        route::get('', 'home')->name('main');
    });

Route::controller(CourseController::class)
    ->prefix('/course')
    ->name('courses.')
    ->group(static function (): void {
        route::get('', 'Course')->name('course-info');
        route::get('course', 'CourseDesc')->name('course-desc');
    });

Route::controller(MyCoursesController::class)
    ->prefix('/my-courses')
    ->name('my-courses.')
    ->group(static function (): void {
        route::get('', 'MyCourses')->name('my-courses');
    });

Route::controller(ManageController::class)
    ->prefix('/manage')
    ->name('manage.')
    ->group(static function (): void {
        route::get('','Manage')->name('manage');
    });
