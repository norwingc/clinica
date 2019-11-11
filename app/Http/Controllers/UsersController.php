<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UsersController extends Controller
{

	/**
	 * @return [type]
	 */
	public function viewLogin()
	{
		if (!Auth::check()) {
			return View('login');
		} else {
			return redirect()->route('home');
		}
	}

	/**
	 * [login description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function login(Request $request)
	{
		$userdata = array(
			'nickname' => $request->nickname,
			'password' => $request->password,
		);

		if (Auth::attempt($userdata, true)) {
			return redirect()->intended('home');
		} else {
			session()->flash('message', "Username or Password incorrect");
			return back();
		}
	}

	/**
	 * [logout description]
	 * @return [type] [description]
	 */
	public function logout()
	{
		Auth::logout();
		return redirect('/');
	}
}
