@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

          <div class="row">
        		<div class="col-md-10 col-md-offset-1">
        			<div class="panel panel-default">
        				<div class="panel-heading">{{trans('tuta.new_course')}}</div>
        				<div class="panel-body">
        					{!! Html::ul($errors->all()) !!}

        					{!! Form::open(array('url' => 'dashboard/admin/courses')) !!}

                  <div class="form-group">
                      {!! Form::label('program_study_id', trans('tuta.program_study') .' *') !!}
                      {!! Form::select('program_study_id', $programStudy, Input::old('program_study_id'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
        					{!! Form::label('course_code', trans('tuta.course_code') .' *') !!}
        					{!! Form::text('course_code', Input::old('course_code'), array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
        					{!! Form::label('course_name', trans('tuta.course_name') .' *') !!}
        					{!! Form::text('course_name', Input::old('course_name'), array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
        					{!! Form::label('semester', trans('tuta.semester') .' *') !!}
        					{!! Form::text('semester', Input::old('semester'), array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
        					{!! Form::label('credits', trans('tuta.credits') .' *') !!}
        					{!! Form::text('credits', Input::old('credits'), array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
                      {!! Form::label('faculty_code', trans('tuta.faculty') .' *') !!}
                      {!! Form::select('faculty_code', $faculty, Input::old('faculty_code'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('study_id', trans('tuta.study') .' *') !!}
                      {!! Form::select('study_id', $study, Input::old('study_id'), array('class' => 'form-control')) !!}
                  </div>

        					{!! Form::submit(trans('tuta.submit'), array('class' => 'btn btn-primary')) !!}

        					{!! Form::close() !!}
        				</div>
        			</div>
        		</div>
        	</div>

        </div>
        @include('home.sidebar')
    </div>
</div>
@endsection
