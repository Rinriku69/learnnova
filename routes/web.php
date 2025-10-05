<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\MyCoursesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware([

    'cache.headers:no_store;no_cache;must_revalidate;max_age=0',

])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::controller(LoginController::class)
        ->prefix('auth')
        ->group(static function (): void {
            route::get('/login', 'showForm')->name('login');
            route::post('/login', 'authenticate')->name('authenticate');
            route::post('/logout', 'logout')->name('logout');
            route::get('/register', 'registerForm')->name('registerForm');
            route::post('/register', 'register')->name('register');
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
            route::get('', 'MyCourses')->name('my-courses');
        });

    Route::controller(UserController::class)
        ->prefix('/users')
        ->name('users.')
        ->group(static function (): void {
            route::get('', 'list')->name('list');
            route::get('/create', 'createForm')->name('create-form');
            route::post('/create', 'create')->name('create');

            Route::prefix('/{user}')->group(static function (): void {
                route::get('/view', 'view')->name('view');
                route::post('/delete', 'delete')->name('delete');
                route::get('/updateForm', 'updateForm')->name('updateForm');
                route::post('/update', 'update')->name('update');
            });
            Route::name('selves.')->group(static function (): void {
                route::get('/selvesview', 'selvesview')->name('view');
                route::get('/selvesupdate', 'selvesUpdateForm')->name('updateForm');
                route::post('/selvesupdate', 'selvesUpdate')->name('update');
            });
        });
});
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

        route::prefix('/{courseCode}')->group(static function (): void {
            route::get('', 'CourseDesc')->name('course-desc');
        });
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
        route::get('', 'Manage')->name('manage');
    });
