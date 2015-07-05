<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Study, App\Faculty;
use Input, Session, Redirect;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $studies = Study::all();
      return view('dashboard.admin.study.index', ['study' => $studies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $faculties = Faculty::lists('faculty_name', 'faculty_code');
        return view('dashboard.admin.study.create', [ 'faculty' => $faculties ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $studies = new Study;
      $studies->study_code = Input::get('study_code');
      $studies->study_name = Input::get('study_name');
      $studies->faculty_code = Input::get('faculty_code');
      $studies->stage = Input::get('stage');
      $studies->save();
      Session::flash('message', 'You have successfully added study');
      return Redirect::to('dashboard/admin/studies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      $studies = Study::find($id);
      $faculties = Faculty::lists('faculty_name', 'faculty_code');
      return view('dashboard.admin.study.edit', [
        'study' => $studies,
        'faculty' => $faculties
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
      $studies = Study::find($id);
      $studies->study_code = Input::get('study_code');
      $studies->study_name = Input::get('study_name');
      $studies->faculty_code = Input::get('faculty_code');
      $studies->stage = Input::get('stage');
      $studies->save();
      Session::flash('message', 'You have successfully updated study');
      return Redirect::to('dashboard/admin/studies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      $studies = Study::find($id);
      $studies->delete();
      Session::flash('message', 'You have successfully deleted study');
      return Redirect::to('dashboard/admin/studies');
    }
}
