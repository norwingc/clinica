<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Undocumented function
     * @param Request $request
     * @return void
     */
    public function login(Request $request)
    {
        $userdata = array(
			'email' => $request->email,
			'password' => $request->password,
		);

		if (Auth::attempt($userdata, true)) {
			return redirect()->intended('home');
		} else {
			session()->flash('message', "Email o Contraseña  incorrecta");
			return back()->withInput();
		}
    }

    /**
     * Undocumented function
     * @return void
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
