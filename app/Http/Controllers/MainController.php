<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function vue() {
        $component = 'slider-3-tabs';
        return view('vue', compact('component'));
    }
}
