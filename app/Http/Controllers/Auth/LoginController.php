<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Point;
use App\Models\User;
use App\Notifications\DailyLogin;

class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectAfterLogout = '/';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'logout']);
	}

	/**
	 * Daily login points
	 *
	 * @return void
	 */
	public function authenticated(Request $request)
	{
		$count = DB::table('laravel_logger_activity')
			->where('userId', Auth::user()->id)
			->whereDate('created_at', '=', Carbon::today()->toDateString())
			->where('description', 'Logged In')
			->get()
			->count();
		$count -= 1;
		if ($count == 0) {
			Point::create(['user_id' => Auth::user()->id,
			               'points'  => 100,
			               'reason'  => 'testing',
			               'dir'     => 'add',
			]);
			$data = ['user_id' => Auth::user()->id,
			         'points'  => 100,
			         'message' => 'Thanks for logging in today. 100 points added to your account!',
			];
			Auth::user()->notify(new DailyLogin($data));
			// return view('home', compact('notifications'));
		}

	}

	/**
	 * Logout, Clear Session, and Return.
	 *
	 * @return void
	 */
	public function logout()
	{
		$user = Auth::user();
		Log::info('User Logged Out. ', [$user]);
		Auth::logout();
		Session::flush();

		return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
	}
}
