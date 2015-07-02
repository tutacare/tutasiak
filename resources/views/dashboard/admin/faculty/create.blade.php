@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

          <div class="row">
        		<div class="col-md-10 col-md-offset-1">
        			<div class="panel panel-default">
        				<div class="panel-heading">{{trans('tuta.new_faculty')}}</div>
        				<div class="panel-body">
        					{!! Html::ul($errors->all()) !!}

        					{!! Form::open(array('url' => 'dashboard/admin/faculties')) !!}

                  <div class="form-group">
        					{!! Form::label('faculty_code', trans('tuta.faculty_code') .' *') !!}
        					{!! Form::text('faculty_code', Input::old('faculty_code'), array('class' => 'form-control')) !!}
        					</div>

                  <div class="form-group">
        					{!! Form::label('faculty_name', trans('tuta.faculty_name') .' *') !!}
        					{!! Form::text('faculty_name', Input::old('faculty_name'), array('class' => 'form-control')) !!}
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
