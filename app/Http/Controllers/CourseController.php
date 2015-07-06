<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Course, App\ProgramStudy;
use App\Faculty, App\Study;
use Input, Session, Redirect;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $courses = Course::all();
      return view('dashboard.admin.course.index', ['course' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $programStudies = ProgramStudy::lists('name', 'id');
        $faculties = Faculty::lists('faculty_name', 'faculty_code');
        $studies = Study::lists('study_name', 'id');
        return view('dashboard.admin.course.create', [
          'programStudy' => $programStudies,
          'faculty' => $faculties,
          'study' => $studies
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $courses = new Course;
      $courses->program_study_id = Input::get('program_study_id');
      $courses->course_code = Input::get('course_code');
      $courses->course_name = Input::get('course_name');
      $courses->semester = Input::get('semester');
      $courses->credits = Input::get('credits');
      $courses->faculty_code = Input::get('faculty_code');
      $courses->study_id = Input::get('study_id');
      $courses->save();
      Session::flash('message', 'You have successfully added course');
      return Redirect::to('dashboard/admin/courses');
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
      $courses = Course::find($id);
      $programStudies = ProgramStudy::lists('name', 'id');
      $faculties = Faculty::lists('faculty_name', 'faculty_code');
      $studies = Study::lists('study_name', 'id');
      return view('dashboard.admin.course.edit', [
        'course' => $courses,
        'programStudy' => $programStudies,
        'faculty' => $faculties,
        'study' => $studies
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
      $courses = Course::find($id);
      $courses->program_study_id = Input::get('program_study_id');
      $courses->course_code = Input::get('course_code');
      $courses->course_name = Input::get('course_name');
      $courses->semester = Input::get('semester');
      $courses->credits = Input::get('credits');
      $courses->faculty_code = Input::get('faculty_code');
      $courses->study_id = Input::get('study_id');
      $courses->save();
      Session::flash('message', 'You have successfully updated course');
      return Redirect::to('dashboard/admin/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      $courses = Course::find($id);
      $courses->delete();
      Session::flash('message', 'You have successfully deleted course');
      return Redirect::to('dashboard/admin/courses');
    }
}
