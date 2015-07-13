<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student, App\Faculty;
use App\Study, App\ProgramStudy;
use App\AcademicRegistration, App\Religion;
use Input, Session, Redirect, Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $students = Student::all();
      return view('dashboard.admin.student.index', ['student' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      $faculties = Faculty::lists('faculty_name', 'faculty_code');
      $studies = Study::lists('study_name', 'id');
      $programStudies = ProgramStudy::lists('name', 'id');
      $academicRegistrations = AcademicRegistration::lists('academic_year', 'id');
      $religions = Religion::lists('name', 'id');
      return view('dashboard.admin.student.create', [
        'faculty' => $faculties,
        'study' => $studies,
        'programStudy' => $programStudies,
        'academicRegistration' => $academicRegistrations,
        'religion' => $religions,
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $students = new Student;
      $students->nim = Input::get('nim');
      $students->name = Input::get('name');
      $students->classroom = Input::get('classroom');
      $students->faculty_code = Input::get('faculty_code');
      $students->study_id = Input::get('study_id');
      $students->program_study_id = Input::get('program_study_id');
      $students->academic_registration_id = Input::get('academic_registration_id');
      $students->email = Input::get('email');
      $students->password = Hash::make(Input::get('password'));
      $students->religion_id = Input::get('religion_id');
      $students->address = Input::get('address');
      $students->phone = Input::get('phone');
      $students->comments = Input::get('comments');
      $students->active = Input::get('active');
      $students->save();
      Session::flash('message', 'You have successfully added student');
      return Redirect::to('dashboard/admin/students');
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
      $students = Student::find($id);
      $faculties = Faculty::lists('faculty_name', 'faculty_code');
      $studies = Study::lists('study_name', 'id');
      $programStudies = ProgramStudy::lists('name', 'id');
      $academicRegistrations = AcademicRegistration::lists('academic_year', 'id');
      $religions = Religion::lists('name', 'id');
      return view('dashboard.admin.student.edit', [
        'student' => $students,
        'faculty' => $faculties,
        'study' => $studies,
        'programStudy' => $programStudies,
        'academicRegistration' => $academicRegistrations,
        'religion' => $religions,
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
