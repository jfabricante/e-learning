<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ExamConfig;
use App\Models\SubCategoryItems;

class CategoryController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$data = array(
			'categories' => Category::all()
		);

		return view('categories/list', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('categories/form');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$category = new Category();
		$category->name = $request->category;
		$category->save();

		Session::flash('msg', 'Category has been saved!');

		return redirect()->route('categories.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$category = Category::find($id);
		
		return view('categories.config_list', compact('category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$data = array(
				'category' => Category::find($id)
			);

		return view('categories/form', $data);
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
		$category       = Category::find($id);
		$category->name = $request->category;
		$category->save();

		Session::flash('msg', 'Category has been updated!');

		return redirect()->route('categories.index');
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
	 * Configuration form
	 * @param int $id
	 * @return \Illuminate\\Http\Response
	 */
	public function configForm($id)
	{
		$category = Category::find($id);

		return view('categories/config_form', compact('category'));
	}


	/**
	 * Config store
	 *
	 */
	public function configStore(Request $request)
	{
		$config              = new ExamConfig;
		$config->category_id = $request->category_id;
		$config->description = $request->description;
		$config->time_limit  = $request->time_limit;
		$config->date_start  = date('Y-m-d', strtotime($request->date_start));
		$config->date_end    = date('Y-m-d', strtotime($request->date_end));
		$config->created_by  = Auth::user()->id;

		$success = $config->save();

		$config_id = $config->id;

		if ($success)
		{
			foreach ($request->all() as $key => $value)
			{
				if (is_numeric($key))
				{
					$subCategoryItem                  = new SubCategoryItems;
					$subCategoryItem->sub_category_id = $key;
					$subCategoryItem->items           = $value;
					$subCategoryItem->exam_config_id  = $config_id;
					$subCategoryItem->save();
				}	
			}

		}

		return redirect()->route('categories.show', ['id' => $request->category_id]);
	}

}
