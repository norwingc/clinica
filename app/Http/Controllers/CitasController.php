<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitasController extends Controller
{

    /**
     * [get description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function get($id = null)
    {
        # code...
    }
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        return view('citas.index');
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {
        return view('citas.create');
    }

    public function store(Request $request)
    {
        # code...
    }
}
