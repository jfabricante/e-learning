<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\DealerGroup;
use App\Models\Dealer;
use App\Models\Trainee;
use App\Models\Position;
use App\Models\Education;
use App\Models\EmploymentHistory;
use App\Models\TrainingHistory;
use App\Models\User;

class UserController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$data = array('trainees' => Trainee::all());

		return view('users/list', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$data = array(
			'dealer_groups' => DealerGroup::all(),
			'positions'     => Position::all(),
		);

		return view('users/form', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$config = array(
			'first_name'  => $request->firstname,
			'middle_name' => $request->middlename,
			'last_name'   => $request->lastname
		);

		Trainee::create($config);
	}

	public function test()
	{
		return view('test');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		// 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}

	public function dealer(Request $request)
	{
		$data = $request->all();

		return response()->json(Dealer::where(array('dealer_group_id' => $data['group']))->get(['id', 'dealer_name AS text']));
	}

	public function handleStore(Request $request)
	{
		$input = $request->all();

		$config = array(
			'dealer_id'            => $input['dealership'],
			'first_name'           => $input['firstname'],
			'middle_name'          => $input['middlename'],
			'last_name'            => $input['lastname'],
			'nickname'             => $input['nickname'],
			'street_address'       => $input['present-address'],
			'telephone_no'         => $input['mobile'],
			'email'                => $input['email'],
			'job_position_id'      => $input['position'],
			'employment_status_id' => 1,
			'date_hired'           => date('Y-m-d H:i:s'),
			'date_of_birth'        => date('Y-m-d', strtotime($input['birthdate'])),
			'gender'               => $input['gender'] == 'Male' ? 1 : 2,
			'date_created'         => date('Y-m-d H:i:s'),
			'duties'               => $input['duties'],
		);

		$trainee_id = Trainee::create($config)->trainee_code;

		$education = array();

		for ($i = 0; $i < count($input['level']); $i++)
		{
			$education[] = array(
				'level'       => $input['level'][$i],
				'institution' => $input['institution'][$i],
				'degree'      => $input['degree'][$i],
				'school_year' => date('Y-m-d', strtotime($input['school-year'][$i])),
				'trainee_id'  => $trainee_id
			);
		}

		$employment = array();

		for ($j = 0; $j < count($input['prev-company']); $j++)
		{
			$employment[] = array(
				'prev_company'  => $input['prev-company'][$j],
				'prev_address'  => $input['prev-address'][$j],
				'prev_position' => $input['prev-position'][$j],
				'prev_inc_date' => $input['prev-inc-date'][$j],
				'trainee_id'    => $trainee_id
			);
		}

		$training = array();

		for ($k = 0; $k < count($input['training-title']); $k++)
		{
			$training[] = array(
				'training_title'   => $input['training-title'][$k],
				'training_trainer' => $input['training-trainer'][$k],
				'training_venue'   => $input['training-venue'][$k],
				'training_date'    => date('Y-m-d', strtotime($input['training-date'][$k])),
				'trainee_id'       => $trainee_id
			);
		}

		// Bulk insertion
		Education::insert($education);
		EmploymentHistory::insert($employment);
		TrainingHistory::insert($training);

		$user             = new User;
		$user->email      = $input['account_username'];
		$user->password   = bcrypt($input['account_password']);
		$user->user_type  = $input['account_user_type'];
		$user->trainee_id = $trainee_id;

		$user->save();
	}

	public function logout()
	{
		Auth::logout();

		return redirect()->guest('/');
	}
}
