<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function index() {
        return view('hello');
    }
}
