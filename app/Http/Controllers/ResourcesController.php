<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
   public function notFoud()
   {
       return view('404', ['message' => 'Pagina no encontrada']);
   }
}
