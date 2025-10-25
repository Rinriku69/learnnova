<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    function home(){
        return View('home.main');
    }

    function about(){
        return View('home.about.main');
    }
}
