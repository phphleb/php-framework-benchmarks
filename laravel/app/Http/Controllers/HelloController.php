<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HelloController extends BaseController
{
    public function index() {
        return view('hello');
    }
}
