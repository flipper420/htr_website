<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use \App\Models\MCategory;
use App\Models\Mission;
use App\Http\Requests\SubmitMissionPass;
use App\Models\Point;

class MissionController extends Controller
{
	protected $id, $name, $mission, $category, $mission_password, $points;
	protected $request;

	public function __construct(Request $request)
	{
		$this->middleware('auth');
		$this->request = $request;
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(MCategory $slug)
	{
		return view('missions.cat.index', compact('slug'));
	}

	/**
	 * Show the mission password form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showpasswordform()
	{
		$categories = MCategory::all();
		return view('missions.forms.password', compact('categories'));
	}

	/**
	 * Validate submitted password.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function submitpassword(SubmitMissionPass $request)
	{
		$this->set();
		$this->getMissionPassword();
		if ($this->password !== $this->mission_password) {
			return view('missions.errors.wrong_password');
		} else {
			$this->getReward();
			$this->logMissionCompleted();
			$points = $this->points;
			return view('missions.right_password', compact('points'));
		}
	}

	public function set()
	{
		if (Input::has('category')) {
			$this->id = Input::get('category');
		}
		if (Input::has('mission')) {
			$this->name = Input::get('mission');
		}
		if (Input::has('password')) {
			$this->password = Input::get('password');
		}
	}

	// TODO: add docbloc

	public function getMissionPassword()
	{
		$this->mission_password = Mission::get()->where('category_id', $this->id)->where('name', $this->name)->pluck('password')->first();
	}

	// TODO: add docbloc
	public function getReward()
	{
		$this->points = DB::table('missions')->where('category_id', $this->id)->where('name', $this->name)->value('reward');
		$p = new Point();
		$p->addReward($this->request->user()->id, $this->points, 'Completed Mission ' . $this->mission . ' in mission category #' . $this->category);

	}

	// TODO: add docbloc

	public function logMissionCompleted()
	{
		DB::table('completed_missions')->insert(['user_id'     => $this->request->user()->id,
		                                         'category_id' => $this->id,
		                                         'mission_id'  => $this->getMissionId(),
		                                         'created_at'  => \Carbon\Carbon::now(),
		                                         'updated_at'  => \Carbon\Carbon::now()]);
	}

	// TODO: add docbloc

	public function getMissionId()
	{
		return Mission::get()->where('category_id', $this->id)->where('name', $this->name)->pluck('id')->first();
	}
}
