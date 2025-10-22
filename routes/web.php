<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\MyCoursesController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware([

    'cache.headers:no_store;no_cache;must_revalidate;max_age=0',

])->group(function () {

    Route::get('/', function () {
        return view('home.main');
    });

    Route::controller(LoginController::class) //Login
        ->prefix('auth')
        ->group(static function (): void {
            route::get('/login', 'showForm')->name('login');
            route::post('/login', 'authenticate')->name('authenticate');
            route::post('/logout', 'logout')->name('logout');
            route::get('/register', 'registerForm')->name('registerForm');
            route::post('/register', 'register')->name('register');
        });


    Route::controller(HomeController::class) //Home
        ->prefix('/home')
        ->name('home.')
        ->group(static function (): void {
            route::get('', 'home')->name('main');
        });

    Route::controller(UserController::class) //User&&Authertication
        ->prefix('/users')
        ->name('users.')
        ->group(static function (): void {
            route::get('', 'list')->name('list');
            route::get('/create', 'createForm')->name('create-form');
            route::post('/create', 'create')->name('create');
            Route::name('selves.')->group(static function (): void {
                route::get('/selvesview', 'selvesview')->name('view');
                route::get('/selvesupdate/{userID}', 'selvesUpdateForm')->name('updateForm');
                route::post('/selvesupdate/{userID}', 'selvesUpdate')->name('update');
            });
            Route::prefix('/{user}')->group(static function (): void {
                route::get('/view', 'view')->name('view');
                route::post('/delete', 'delete')->name('delete');
                route::get('/updateForm', 'updateForm')->name('updateForm');
                route::post('/update', 'update')->name('update');
            });
        });

    Route::controller(CourseController::class) //Courses
        ->prefix('/course')
        ->name('courses.')

        ->group(static function (): void {
            route::get('', 'courseList')->name('list');
            route::get('/create', 'CourseCreateForm')->name('createForm');
            route::post('', 'CourseCreate')->name('create');

            Route::name('myCourse.') // My course
                ->group(static function (): void {
                    route::get('/myCourseExpert', 'ExpertCourseList')->name('elist');
                    route::get('/myCourse', 'StudentcourseList')->name('slist');
                });

            Route::prefix('/{courseCode}')->group(static function (): void {
                route::get('/view', 'courseView')->name('view');
                route::get('/updateForm', 'CourseUpdateForm')->name('updateForm');
                route::post('/update', 'CourseUpdate')->name('update');
                route::post('/delete', 'CourseDelete')->name('delete');
                route::post('/register', 'CourseRegister')->name('register');
                route::get('/studentList', 'studentList')->name('student');
                route::get('/ContentManage', 'CourseContentManage')->name('manage');
                route::get('/Content', 'CourseContentView')->name('content');
                route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
                Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.createForm');
            });
        });

    Route::controller(ReviewController::class)
        ->prefix('/reviews')
        ->name('reviews.')
        ->group(static function (): void {
            Route::prefix('/{review}')->group(static function (): void {
                route::get('/edit', 'edit')->name('edit');
                route::put('/update', 'update')->name('update');
                route::patch('/update', 'update');
                route::post('/delete', 'destroy')->name('destroy');
            });
        });

    Route::controller(LessonController::class)
    ->prefix('/lesson')
    ->name('lesson.')
    ->group(static function(): void{
     
        Route::prefix('/create/{courseCode}')->group(static function (): void {
         route::get('/CreateForm', 'CreateForm')->name('CreateForm');
         route::post('/Create', 'Create')->name('Create');
         
        });
        Route::prefix('/view/{lessonID}')->group(static function (): void {
        route::get('/content','view')->name('view');
        route::post('/Delete', 'Delete')->name('delete');
         
        });
    });
});
