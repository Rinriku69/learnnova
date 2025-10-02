<?php

use App\Http\Controllers\HomeController;
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
