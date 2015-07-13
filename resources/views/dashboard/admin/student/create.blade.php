@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

          <div class="row">
        		<div class="col-md-10 col-md-offset-1">
        			<div class="panel panel-default">
        				<div class="panel-heading">{{trans('tuta.new_student')}}</div>
        				<div class="panel-body">
        					{!! Html::ul($errors->all()) !!}

        					{!! Form::open(array('url' => 'dashboard/admin/students')) !!}

                  <div class="form-group">
        					{!! Form::label('nim', trans('tuta.nim') .' *') !!}
        					{!! Form::text('nim', Input::old('nim'), array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
        					{!! Form::label('name', trans('tuta.name') .' *') !!}
        					{!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
        					{!! Form::label('classroom', trans('tuta.classroom')) !!}
        					{!! Form::text('classroom', Input::old('classroom'), array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
                      {!! Form::label('faculty_code', trans('tuta.faculty') .' *') !!}
                      {!! Form::select('faculty_code', $faculty, Input::old('faculty_code'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('study_id', trans('tuta.study') .' *') !!}
                      {!! Form::select('study_id', $study, Input::old('study_id'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('program_study_id', trans('tuta.program_study') .' *') !!}
                      {!! Form::select('program_study_id', $programStudy, Input::old('program_study_id'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('academic_registration_id', trans('tuta.academic_year') .' *') !!}
                      {!! Form::select('academic_registration_id', $academicRegistration, Input::old('academic_registration_id'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
        					{!! Form::label('email', trans('tuta.email').' *') !!}
        					{!! Form::text('email', Input::old('email'), array('class' => 'form-control')) !!}
        					</div>

        					<div class="form-group">
        					{!! Form::label('password', trans('tuta.password').' *') !!}
        					<input type="password" class="form-control" name="password" placeholder="Password">
        					</div>

        					<div class="form-group">
        					{!! Form::label('password_confirmation', trans('tuta.confirm_password').' *') !!}
        					<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
        					</div>

                  <div class="form-group">
                      {!! Form::label('religion_id', trans('tuta.religion') .' *') !!}
                      {!! Form::select('religion_id', $religion, Input::old('religion_id'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('address', 'Address') !!}
                  {!! Form::text('address', Input::old('address'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('phone', 'Phone') !!}
                  {!! Form::text('phone', Input::old('phone'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('comments', 'Comments') !!}
                  {!! Form::text('comments', Input::old('comments'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('active', 'Active') !!}
                    <label class="radio-inline">
                      {!! Form::radio('active', 'Y', true) !!} Yes
                    </label>
                    <label class="radio-inline">
                      {!! Form::radio('active', 'N') !!} No
                    </label>
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
