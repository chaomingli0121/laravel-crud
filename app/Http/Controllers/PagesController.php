<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// this is pages controller
class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
