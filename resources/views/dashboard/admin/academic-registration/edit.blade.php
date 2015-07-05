@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

              <div class="panel panel-default">
                <div class="panel-heading">{{trans('tuta.update_academic_registration')}}</div>

                <div class="panel-body">
                  {!! Html::ul($errors->all()) !!}

                  {!! Form::model($academicRegistration, array('route' => array('dashboard.admin.academic-registrations.update', $academicRegistration->id), 'method' => 'PUT')) !!}

                  <div class="form-group">
                  {!! Form::label('academic_year', trans('tuta.academic_year').' *') !!}
                  {!! Form::text('academic_year', null, array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('active', 'Active') !!}
                    <label class="radio-inline">
                      {!! Form::radio('active', 'Y') !!} Yes
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
        @include('home.sidebar')
    </div>
</div>
@endsection
