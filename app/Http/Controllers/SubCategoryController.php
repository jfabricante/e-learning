<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\QuestionBank;

class SubCategoryController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		$data = array(
				'subcategories' => SubCategory::all()
			);

		return view('subcategories/list', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$data = array(
				'categories' => Category::all()
			);

		return view('subcategories/form', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// Store new resource
		$subcategory = new SubCategory();
		$subcategory->name = $request->sub_category;
		$subcategory->category_id = $request->category_id;
		$subcategory->save();

		Session::flash('msg', 'Sub Category has been saved!');

		return redirect()->route('subcategories.index');
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
		// dd(SubCategory::find($id)->category->name);
		$data = array(
				'subcategory' => SubCategory::find($id),
				'categories'  => Category::all()
			);

		return view('subcategories/form', $data);
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
		// Update resource
		$subcategory = SubCategory::find($id);
		$subcategory->name = $request->sub_category;
		$subcategory->category_id = $request->category_id;
		$subcategory->save();


		Session::flash('msg', 'Sub Category has been updated!');

		return redirect()->route('subcategories.index');
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
