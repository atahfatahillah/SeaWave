<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /*
     * Index page controller
     * =====================
     */
    public function index(Request $request) {
        return view('home.index');
    }

    /*
     * Contact page controller
     * =====================
     */
    public function contact(Request $request) {
        return view('home.about');
    }

    /*
     * About page controller
     * =====================
     */
    public function about(Request $request) {
        return view('home.about');
    }
}
