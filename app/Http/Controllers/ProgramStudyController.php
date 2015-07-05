<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ProgramStudy;
use Input, Session, Redirect;

class ProgramStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $programStudies = ProgramStudy::all();
      return view('dashboard.admin.program-study.index', ['programStudy' => $programStudies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.admin.program-study.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $programStudies = new ProgramStudy;
      $programStudies->name = Input::get('name');
      $programStudies->save();
      Session::flash('message', 'You have successfully added program study');
      return Redirect::to('dashboard/admin/program-studies');
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
      $programStudies = ProgramStudy::find($id);
      return view('dashboard.admin.program-study.edit', [
        'programStudy' => $programStudies
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
      $programStudies = ProgramStudy::find($id);
      $programStudies->name = Input::get('name');
      $programStudies->save();
      Session::flash('message', 'You have successfully updated program study');
      return Redirect::to('dashboard/admin/program-studies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      $programStudies = ProgramStudy::find($id);
      $programStudies->delete();
      Session::flash('message', 'You have successfully deleted program study');
      return Redirect::to('dashboard/admin/program-studies');
    }
}
