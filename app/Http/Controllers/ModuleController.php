<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\SubCategory;
use App\Models\Module;
use App\Models\ModuleStatus;


class ModuleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$data = array(
				'modules' => Module::all(),
				'title'   => 'Add New Module'
			);

		return view('modules/list', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$data = array(
				'subcategories' => SubCategory::all(),
				'title'         => 'Add New Module'
			);

		return view('modules/form', $data);
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
				'name'            => $request->module_name,
				'subcategory_id'  => $request->subcategory_id,
				'course_period'   => $request->course_period,
				'plan_start'      => $request->plan_start ? date('Y-m-d', strtotime($request->plan_start)) : '',
				'completion_date' => $request->completion_date ? date('Y-m-d', strtotime($request->completion_date)) : '',
				'filename'        => $request->attachment->getClientOriginalName() ? $request->attachment->getClientOriginalName() : '',
				'mime_type'       => $request->attachment->getMimeType() ? $request->attachment->getMimeType() : '',
				'file_size'       => $request->attachment->getSize() ? $request->attachment->getSize() : '',
				'uploaded_by'     => Auth::user()->id
			);

		$module = new Module($config);
		$saved  = $module->save();

		if ($saved)
		{
			$request->file('attachment')->move(base_path() . '/public/upload/', $request->attachment->getClientOriginalName());

			Session::flash('msg', 'Module has been saved!');

			return redirect()->route('modules.index');
		}

		return redirect()->route('modules.create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$clause = array(
				'module_id' => $id,
				'user_id'   => Auth::user()->id
			);

		if(!count(ModuleStatus::where($clause)->get()))
		{
			$clause['status'] = 'Ongoing';

			$module_status = new ModuleStatus($clause);
			$module_status->save();
		}

		$data = array(
				'module' => Module::find($id)
			);

		return view('modules/view', $data);
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
				'module'        => Module::find($id),
				'subcategories' => SubCategory::all(),
				'title'         => 'Update Module Status'
			);

		return view('modules/form', $data);
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
		$module                  = Module::find($id);
		$module->name            = $request->module_name;
		$module->subcategory_id  = $request->subcategory_id;
		$module->plan_start      = $request->plan_start ? date('Y-m-d', strtotime($request->plan_start)) : '' ;
		$module->completion_date = $request->completion_date ? date('Y-m-d', strtotime($request->completion_date)) : '';
		$module->course_period   = $request->course_period;
		$module->uploaded_by     = Auth::user()->id;

		// Has attachment
		if (isset($request->attachment))
		{
			$module->filename  = $request->attachment->getClientOriginalName();
			$module->mime_type = $request->attachment->getMimeType();
			$module->file_size = $request->attachment->getSize();

			$request->file('attachment')->move(base_path() . '/public/upload/', $request->attachment->getClientOriginalName());
		}

		$saved = $module->save();

		if ($saved)
		{
			Session::flash('msg', 'Module has been updated!');

			return redirect()->route('modules.index');
		}

		return redirect()->route('modules.create');
	}

	/**
	 * Update module status to completed
	 */
	public function moduleCompleted($id)
	{
		$clause = array(
				'module_id' => $id,
				'user_id'   => Auth::user()->id
			);

		$module_status         = ModuleStatus::where($clause)->first();

		if (count($module_status))
		{
			$module_status->status = 'Completed';
			$module_status->save();

			Session::flash('msg', 'Module status has been updated!');
		}

		return redirect()->route('modules.index');
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
