<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ExamType;
use Input, Session, Redirect;

class ExamTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $examTypes = ExamType::all();
      return view('dashboard.admin.exam-type.index', ['examType' => $examTypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.admin.exam-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $examTypes = new ExamType;
      $examTypes->name = Input::get('name');
      $examTypes->save();
      Session::flash('message', 'You have successfully added type of exam');
      return Redirect::to('dashboard/admin/exam-types');
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
        $examTypes = ExamType::find($id);
        return view('dashboard.admin.exam-type.edit', ['examType' => $examTypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
      $examTypes = ExamType::find($id);
      $examTypes->name = Input::get('name');
      $examTypes->save();
      Session::flash('message', 'You have successfully updated type of exam');
      return Redirect::to('dashboard/admin/exam-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      $examTypes = ExamType::find($id);
      $examTypes->delete();
      Session::flash('message', 'You have successfully deleted type of exam');
      return Redirect::to('dashboard/admin/exam-types');
    }
}
