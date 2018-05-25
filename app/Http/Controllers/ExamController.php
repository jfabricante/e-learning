<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\ExamConfig;
use App\Models\SubCategoryItems;
use App\Models\QuestionBank;
use App\Models\UserExamConfig;
use App\Models\UserExamQuestions;
use App\Models\UserExamChoices;
use App\Models\UserExamAnswers;


class ExamController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$data = array(
				'exams' => ExamConfig::all()
			);

		return view('exams/list', $data); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{	

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$user_exam_questions = count(UserExamConfig::find($request->config_id)->examQuestions) ? UserExamConfig::find($request->config_id)->examQuestions : 0;

		$data = array(
			'score' => $user_exam_questions ? $user_exam_questions->map(function($item) {return count($item->examAnswer) ? $item->examAnswer : 0 ; })->sum('is_correct') : 0,
			'items' => $user_exam_questions ? $user_exam_questions->count() : 0
		);

		return response()->json($data);
	}

	public function updateAnswer(Request $request)
	{
		$user_answer = UserExamAnswers::where('user_exam_question_id', $request->question_id)->first();

		if ($user_answer)
		{
			$user_answer->user_exam_question_id = $request->question_id;
			$user_answer->user_exam_answer      = $request->answer;
			$user_answer->is_correct            = $request->answer == $request->correct_answer;
			$user_answer->save();
		}
		else
		{
			// Create new instance
			$user_answer                        = new UserExamAnswers;
			$user_answer->user_exam_question_id = $request->question_id;
			$user_answer->user_exam_answer      = $request->answer;
			$user_answer->is_correct            = $request->answer == $request->correct_answer;
			$user_answer->save();
		}

		return response()->json($user_answer); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		ini_set('memory_limit', '-1');

		$flag = UserExamConfig::where(['config_id' => $id, 'user_id' => Auth::user()->id])->count();

		// Generate random exam for specific user
		if ($flag == 0)
		{
			$config            = ExamConfig::find($id);
			$subcategory_items = $config->subCategoryItems;

			// Save initial configuration
			$user_exam_config                 = new UserExamConfig;
			$user_exam_config->user_id        = Auth::user()->id;
			$user_exam_config->config_id      = $id;
			$user_exam_config->remaining_time = $config->time_limit * 60; // Convert the minutes to seconds
			$user_exam_config->save();

			$user_exam_config_id = $user_exam_config->id;

			foreach ($subcategory_items as $row)
			{
				$questions = QuestionBank::where('sub_category_id', $row->sub_category_id)->take($row->items)->orderByRaw("RAND()")->get()->shuffle();

				foreach ($questions as $question)
				{
					$choices = $question->choices->shuffle();

					// Store shuffle questions
					$user_exam_question                      = new UserExamQuestions;
					$user_exam_question->question_id         = $question->id;
					$user_exam_question->question            = $question->question;
					$user_exam_question->user_exam_config_id = $user_exam_config_id;
					$user_exam_question->save();

					$user_exam_question_id = $user_exam_question->id;

					foreach ($choices as $key => $choice)
					{
						// Store shuffled choices
						$user_exam_choice                        = new UserExamChoices;
						$user_exam_choice->choice                = $choice->choice;
						$user_exam_choice->user_exam_question_id = $user_exam_question_id;
						$user_exam_choice->save();
					}
				}
			}
		}

		$user_config = UserExamConfig::where(['config_id' => $id, 'user_id' => Auth::user()->id])->first();

		$entities = $user_config->examQuestions()->paginate(1);

		$data = array(
				'entities' => $user_config->examQuestions()->paginate(1),
				'title'    => $user_config->examConfig->description,
				'config'   => $user_config
			);
		
		return view('exams.item', $data);
		
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

	/**
	 * Update time
	 */
	public function updateTime(Request $request)
	{
		$user_config = UserExamConfig::find($request->id);
		$user_config->remaining_time = $request->remaining_time;
		$user_config->save();

		return response()->json($user_config);
	}
}
