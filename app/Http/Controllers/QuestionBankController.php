<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
		$title = 'Add New Question';
		return view('questions/form', compact('id', 'title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
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

			Session::flash('msg', 'New question has been saved!');
		}
		else
		{
			Session::flash('msg', 'There is something wrong either in the question or choices!');
		}

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
		$question = QuestionBank::find($id);

		$data = array(
				'id'       => $question->sub_category_id,
				'question' => $question,
				'title'    => 'Edit Question'
			);

		return view('questions/form', $data);
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
		$entity             = QuestionBank::find($id);
		$entity->question   = $request->question;
		$entity->answer     = $request->answer;
		$entity->created_by = Auth::user()->id;

		$success = $entity->save();

		if ($success)
		{
			$q_id = $id;

			Choice::where('question_id', $id)->delete();
			// Prepare inserting choices
			foreach ($request->choice as $row) 
			{
				$choice = new Choice;
				$choice->choice = $row;
				$choice->question_id = $q_id;
				$choice->save();
			}

			Session::flash('msg', 'Question has been updated!');
		}
		else
		{
			Session::flash('msg', 'There is something wrong either in the question or choices!');
		}

		return redirect()->route('subcategories.show', ['id' => $request->sub_category_id]);
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
