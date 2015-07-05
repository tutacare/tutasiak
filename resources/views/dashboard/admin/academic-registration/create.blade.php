@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

          <div class="row">
        		<div class="col-md-10 col-md-offset-1">
        			<div class="panel panel-default">
        				<div class="panel-heading">{{trans('tuta.new_academic_registration')}}</div>
        				<div class="panel-body">
        					{!! Html::ul($errors->all()) !!}

        					{!! Form::open(array('url' => 'dashboard/admin/academic-registrations')) !!}

        					<div class="form-group">
        					{!! Form::label('academic_year', trans('tuta.academic_year') .' *') !!}
        					{!! Form::text('academic_year', Input::old('academic_year'), array('class' => 'form-control')) !!}
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
