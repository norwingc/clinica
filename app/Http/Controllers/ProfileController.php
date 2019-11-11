<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
	protected $user;

	/**
	 * [__construct description]
	 */
	function __construct()
	{
		$this->middleware(function ($request, $next) {
			$this->user = Auth::user();
			return $next($request);
		});
	}
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		return view('profile.index', ['user' => $this->user]);
	}

	/**
	 * [avatar description]
	 * @return [type] [description]
	 */
	public function avatar()
	{
		request()->validate([
			'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);

		$imageName = 'System-' . $this->user->nickname . '.' . request()->avatar->getClientOriginalExtension();
		request()->avatar->move(base_path('img/profile'), $imageName);

		$this->user->avatar = $imageName;
		$this->user->update();

		session()->flash('message_success', "Profile Updated");
		return back();
	}

	/**
	 * [password description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function password(Request $request)
	{
		request()->validate([
			'password'              => 'required|min:8|confirmed',
			'password_confirmation' => 'required',
		]);

		$this->user->password = bcrypt($request->password);
		$this->user->update();

		session()->flash('message_success', "Password Updated");
		return back();
	}

	/**
	 * [theme description]
	 * @param  [type] $theme [description]
	 * @return [type]        [description]
	 */
	public function theme($theme)
	{
		$this->user->theme = $theme;
		$this->user->update();

		session()->flash('message_success', "Theme Updated");
		return back();
	}
}
