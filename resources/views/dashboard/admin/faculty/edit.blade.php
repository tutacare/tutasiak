@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

              <div class="panel panel-default">
                <div class="panel-heading">{{trans('tuta.update_faculty')}}</div>

                <div class="panel-body">
                  {!! Html::ul($errors->all()) !!}

                  {!! Form::model($faculty, array('route' => array('dashboard.admin.faculties.update', $faculty->faculty_code), 'method' => 'PUT')) !!}

                  <div class="form-group">
                  {!! Form::label('faculty_code', trans('tuta.faculty_code') .' *') !!}
                  {!! Form::text('faculty_code', null, array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('faculty_name', trans('tuta.faculty_name') .' *') !!}
                  {!! Form::text('faculty_name', null, array('class' => 'form-control')) !!}
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
