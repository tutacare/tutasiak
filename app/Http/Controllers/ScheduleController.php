<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Schedule, App\AcademicRegistration;
use App\ProgramStudy, App\Course, App\Day;
use App\Study, App\Lecturer;
use Input, Session, Redirect;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $schedules = Schedule::all();
      return view('dashboard.admin.schedule.index', ['schedule' => $schedules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $academicRegistrations = AcademicRegistration::lists('academic_year', 'id');
        $programStudies = ProgramStudy::lists('name', 'id');
        $courses = Course::lists('course_name', 'id');
        $studies = Study::lists('study_name', 'id');
        $lecturers = Lecturer::lists('name', 'id');
        $days = Day::lists('day', 'id');
        return view('dashboard.admin.schedule.create', [
          'academicRegistration' => $academicRegistrations,
          'programStudy' => $programStudies,
          'course' => $courses,
          'study' => $studies,
          'lecturer' => $lecturers,
          'day' => $days,
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $schedules = new Schedule;
      $schedules->academic_year_id = Input::get('academic_year_id');
      $schedules->program_study_id = Input::get('program_study_id');
      $schedules->course_id = Input::get('course_id');
      $schedules->study_id = Input::get('study_id');
      $schedules->class_room = Input::get('class_room');
      $schedules->lecturer_id = Input::get('lecturer_id');
      $schedules->day_id = Input::get('day_id');
      $schedules->start_time = Input::get('start_time');
      $schedules->finish_time = Input::get('finish_time');
      $schedules->date_midterm_exam = date("Y-m-d", strtotime(Input::get('date_midterm_exam')));;
      $schedules->start_midterm_exam_time = Input::get('start_midterm_exam_time');
      $schedules->finish_midterm_exam_time = Input::get('finish_midterm_exam_time');
      $schedules->midterm_exam_room = Input::get('midterm_exam_room');
      $schedules->date_final_exam = date("Y-m-d", strtotime(Input::get('date_final_exam')));
      $schedules->start_final_exam_time = Input::get('start_final_exam_time');
      $schedules->finish_final_exam_time = Input::get('finish_final_exam_time');
      $schedules->final_exam_room = Input::get('final_exam_room');
      $schedules->save();
      Session::flash('message', 'You have successfully added schedule');
      return Redirect::to('dashboard/admin/schedules');
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
        //
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
