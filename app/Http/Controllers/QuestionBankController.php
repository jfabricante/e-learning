<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\SubCategory;
use App\Models\QuestionBank;
use App\Models\Choice;

class QuestionBankController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//

		return view('questions/list');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('questions/form');
	}

	/**
	 * Show the form for creating new quetions with reference to its subcategory
	 * @param SubCategory id
	 * @return Form View
	 */

	public function createQuestion($id)
	{
		return view('questions/form', compact('id'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
		// dd($request->all());

		$entity                  = new QuestionBank;
		$entity->question        = $request->question;
		$entity->sub_category_id = $request->sub_category_id;
		$entity->answer          = $request->answer;
		$entity->created_by      = Auth::user()->id;

		$success = $entity->save();

		if ($success)
		{
			$q_id = $entity->id;

			// Prepare inserting choices
			foreach ($request->choice as $row) 
			{
				$choice = new Choice;
				$choice->choice = $row;
				$choice->question_id = $q_id;
				$choice->save();
			}

			// Session::flash('msg', 'New question has been saved!');
		}
		/*else
		{
			Session::flash('msg', 'There is something wrong either in the question or choices!');
		}*/

		return redirect()->route('subcategories.show', ['id' => $request->sub_category_id]);
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
}
