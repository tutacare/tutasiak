<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AcademicRegistration;
use Input, Session, Redirect;

class AcademicRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $academicRegistrations = AcademicRegistration::all();
      return view('dashboard.admin.academic-registration.index', ['academicRegistration' => $academicRegistrations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.admin.academic-registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $academicRegistrations = new AcademicRegistration;
      $academicRegistrations->academic_year = Input::get('academic_year');
      $academicRegistrations->active = Input::get('active');
      $academicRegistrations->save();
      Session::flash('message', 'You have successfully added academic registration');
      return Redirect::to('dashboard/admin/academic-registrations');
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
      $academicRegistrations = AcademicRegistration::find($id);
      return view('dashboard.admin.academic-registration.edit', [
        'academicRegistration' => $academicRegistrations
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
      $academicRegistrations = AcademicRegistration::find($id);
      $academicRegistrations->academic_year = Input::get('academic_year');
      $academicRegistrations->active = Input::get('active');
      $academicRegistrations->save();
      Session::flash('message', 'You have successfully updated academic registration');
      return Redirect::to('dashboard/admin/academic-registrations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      $academicRegistrations = AcademicRegistration::find($id);
      $academicRegistrations->delete();
      Session::flash('message', 'You have successfully deleted academic registration');
      return Redirect::to('dashboard/admin/academic-registrations');
    }
}
