@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

          <div class="row">
        		<div class="col-md-10 col-md-offset-1">
        			<div class="panel panel-default">
        				<div class="panel-heading">{{trans('tuta.new_lecturer')}}</div>
        				<div class="panel-body">
        					{!! Html::ul($errors->all()) !!}

        					{!! Form::open(array('url' => 'dashboard/admin/lecturers')) !!}

        					<div class="form-group">
        					{!! Form::label('name', trans('tuta.name') .' *') !!}
        					{!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
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
