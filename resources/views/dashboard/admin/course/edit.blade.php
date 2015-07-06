@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

              <div class="panel panel-default">
                <div class="panel-heading">{{trans('tuta.update_course')}}</div>

                <div class="panel-body">
                  {!! Html::ul($errors->all()) !!}

                  {!! Form::model($course, array('route' => array('dashboard.admin.courses.update', $course->id), 'method' => 'PUT')) !!}

                  <div class="form-group">
                      {!! Form::label('program_study_id', trans('tuta.program_study') .' *') !!}
                      {!! Form::select('program_study_id', $programStudy, null, array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
        					{!! Form::label('course_code', trans('tuta.course_code') .' *') !!}
        					{!! Form::text('course_code', null, array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
        					{!! Form::label('course_name', trans('tuta.course_name') .' *') !!}
        					{!! Form::text('course_name', null, array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
        					{!! Form::label('semester', trans('tuta.semester') .' *') !!}
        					{!! Form::text('semester', null, array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
        					{!! Form::label('credits', trans('tuta.credits') .' *') !!}
        					{!! Form::text('credits', null, array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
                      {!! Form::label('faculty_code', trans('tuta.faculty') .' *') !!}
                      {!! Form::select('faculty_code', $faculty, null, array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('study_id', trans('tuta.study') .' *') !!}
                      {!! Form::select('study_id', $study, null, array('class' => 'form-control')) !!}
                  </div>

                  {!! Form::submit(trans('tuta.submit'), array('class' => 'btn btn-primary')) !!}

                  {!! Form::close() !!}
                </div>
              </div>

        </div>
        @include('home.sidebar')
    </div>
</div>
@endsection
