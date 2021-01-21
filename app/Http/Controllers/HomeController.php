<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Undocumented function
     * @return void
     */
    public function index()
    {
        return view('home');
    }
}
