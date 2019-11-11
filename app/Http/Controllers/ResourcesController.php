<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResourcesController extends Controller
{

	/**
	 * [notFoud description]
	 * @return [type] [description]
	 */
	public function notFoud()
	{
		if (Auth::check()) {
			return view('404', ['message' => 'Pagina no encontrada']);
		} else {
			return redirect('login');
		}
	}
}
