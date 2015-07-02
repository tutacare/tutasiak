@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

          <div class="row">
        		<div class="col-md-10 col-md-offset-1">
        			<div class="panel panel-default">
        				<div class="panel-heading">{{trans('tuta.new_study')}}</div>
        				<div class="panel-body">
        					{!! Html::ul($errors->all()) !!}

        					{!! Form::open(array('url' => 'dashboard/admin/studies')) !!}

        					<div class="form-group">
        					{!! Form::label('study_code', trans('tuta.study_code') .' *') !!}
        					{!! Form::text('study_code', Input::old('study_code'), array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
        					{!! Form::label('study_name', trans('tuta.study_name') .' *') !!}
        					{!! Form::text('study_name', Input::old('study_name'), array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
                      {!! Form::label('faculty_code', trans('tuta.faculty') .' *') !!}
                      {!! Form::select('faculty_code', $faculty, Input::old('faculty_code'), array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
        					{!! Form::label('stage', trans('tuta.stage') .' *') !!}
        					{!! Form::text('stage', Input::old('stage'), array('class' => 'form-control')) !!}
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
