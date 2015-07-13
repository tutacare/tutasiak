@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-12">
            <h2>Schedule <a class="btn btn-primary" href="{{ URL::to('dashboard/admin/schedules/create') }}" role="button">Add New</a></h2>
        </div>
        @if (Session::has('message'))
        <div class="col-md-12">
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        </div>
        @endif
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <td><small>Academic Year</small></td>
            <td><small>Program Study</small></td>
            <td><small>Course</small></td>
            <td><small>Study</small></td>
            <td><small>Class Room</small></td>
            <td><small>Lecturer</small></td>
            <td><small>Day</small></td>
            <td><small>Start Time</small></td>
            <td><small>Finish Time</small></td>
            <td><small>Date Midterm Exam</small></td>
            <td><small>Start Midterm Exam Time</small></td>
            <td><small>Finish Midterm Exam Time</small></td>
            <td><small>Midterm Exam Room</small></td>
            <td><small>Date Final Exam</small></td>
            <td><small>Start Final Exam Time</small></td>
            <td><small>Finish Final Exam Time</small></td>
            <td><small>Final Exam Room</small></td>
            <td colspan="2">&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    @foreach($schedule as $value)
        <tr>
          <td><small>{{$value->academicRegistration->academic_year}}</small></td>
          <td><small>{{$value->programStudy->name}}</small></td>
          <td><small>{{$value->course->course_name}}</small></td>
          <td><small>{{$value->study->study_name}}</small></td>
          <td><small>{{$value->class_room}}</small></td>
          <td><small>{{$value->lecturer->name}}</small></td>
          <td><small>{{$value->day->day}}</small></td>
          <td><small>{{ date('H:i', strtotime($value->start_time)) }}</small></td>
          <td><small>{{ date('H:i', strtotime($value->finish_time)) }}</small></td>
          <td><small>{{ date('d-m-Y', strtotime($value->date_midterm_exam)) }}</small></td>
          <td><small>{{ date('H:i', strtotime($value->start_midterm_exam_time)) }}</small></td>
          <td><small>{{ date('H:i', strtotime($value->finish_midterm_exam_time)) }}</small></td>
          <td><small>{{$value->midterm_exam_room}}</small></td>
          <td><small>{{ date('d-m-Y', strtotime($value->date_final_exam)) }}</small></td>
          <td><small>{{ date('H:i', strtotime($value->start_final_exam_time)) }}</small></td>
          <td><small>{{ date('H:i', strtotime($value->finish_final_exam_time)) }}</small></td>
          <td><small>{{$value->final_exam_room}}</small></td>
            <td>
                <a class="btn btn-xs btn-info" href="{{ URL::to('dashboard/admin/schedules/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
            <td>
                {!! Form::open(array('url' => 'dashboard/admin/schedules/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    <button class="btn btn-xs btn-warning" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

</div>
</div>
@endsection
