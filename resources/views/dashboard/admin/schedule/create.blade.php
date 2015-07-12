@extends('app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">

          <div class="row">
        		<div class="col-md-10 col-md-offset-1">
        			<div class="panel panel-default">
        				<div class="panel-heading">{{trans('tuta.new_schedule')}}</div>
        				<div class="panel-body">
        					{!! Html::ul($errors->all()) !!}

        					{!! Form::open(array('url' => 'dashboard/admin/schedules')) !!}

                  <div class="form-group">
                      {!! Form::label('academic_year_id', trans('tuta.academic_year') .' *') !!}
                      {!! Form::select('academic_year_id', $academicRegistration, Input::old('academic_year_id'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('program_study_id', trans('tuta.program_study') .' *') !!}
                      {!! Form::select('program_study_id', $programStudy, Input::old('program_study_id'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('course_id', trans('tuta.course') .' *') !!}
                      {!! Form::select('course_id', $course, Input::old('course_id'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('study_id', trans('tuta.study') .' *') !!}
                      {!! Form::select('study_id', $study, Input::old('study_id'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('class_room', trans('tuta.class_room') .' *') !!}
                  {!! Form::text('class_room', Input::old('class_room'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('lecturer_id', trans('tuta.lecturer') .' *') !!}
                      {!! Form::select('lecturer_id', $lecturer, Input::old('lecturer_id'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('day_id', trans('tuta.day') .' *') !!}
                      {!! Form::select('day_id', $day, Input::old('day_id'), array('class' => 'form-control')) !!}
                  </div>


                  <div class="form-group">
                    {!! Form::label('start_time', trans('tuta.start_time') .' *') !!}
                    {!! Form::text('start_time', Input::old('start_time'), array('class' => 'form-control', 'id' => 'start_time')) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('finish_time', trans('tuta.finish_time') .' *') !!}
                    {!! Form::text('finish_time', Input::old('finish_time'), array('class' => 'form-control', 'id' => 'finish_time')) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('date_midterm_exam', trans('tuta.date_midterm_exam') .' *') !!}
                    {!! Form::text('date_midterm_exam', Input::old('date_midterm_exam'), array('class' => 'form-control', 'id' => 'date_midterm_exam')) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('start_midterm_exam_time', trans('tuta.start_midterm_exam_time') .' *') !!}
                    {!! Form::text('start_midterm_exam_time', Input::old('start_midterm_exam_time'), array('class' => 'form-control', 'id' => 'start_midterm_exam_time')) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('finish_midterm_exam_time', trans('tuta.finish_midterm_exam_time') .' *') !!}
                    {!! Form::text('finish_midterm_exam_time', Input::old('finish_midterm_exam_time'), array('class' => 'form-control', 'id' => 'finish_midterm_exam_time')) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('midterm_exam_room', trans('tuta.midterm_exam_room') .' *') !!}
                  {!! Form::text('midterm_exam_room', Input::old('midterm_exam_room'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('date_final_exam', trans('tuta.date_final_exam') .' *') !!}
                    {!! Form::text('date_final_exam', Input::old('date_final_exam'), array('class' => 'form-control', 'id' => 'date_final_exam')) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('start_final_exam_time', trans('tuta.start_final_exam_time') .' *') !!}
                    {!! Form::text('start_final_exam_time', Input::old('start_final_exam_time'), array('class' => 'form-control', 'id' => 'start_final_exam_time')) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('finish_final_exam_time', trans('tuta.finish_final_exam_time') .' *') !!}
                    {!! Form::text('finish_final_exam_time', Input::old('finish_final_exam_time'), array('class' => 'form-control', 'id' => 'finish_final_exam_time')) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('final_exam_room', trans('tuta.final_exam_room') .' *') !!}
                  {!! Form::text('final_exam_room', Input::old('final_exam_room'), array('class' => 'form-control')) !!}
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
