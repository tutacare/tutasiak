@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

              <div class="panel panel-default">
                <div class="panel-heading">{{trans('tuta.update_study')}}</div>

                <div class="panel-body">
                  {!! Html::ul($errors->all()) !!}

                  {!! Form::model($study, array('route' => array('dashboard.admin.studies.update', $study->id), 'method' => 'PUT')) !!}

                  <div class="form-group">
                  {!! Form::label('study_code', trans('tuta.study_code').' *') !!}
                  {!! Form::text('study_code', null, array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('study_name', trans('tuta.study_name') .' *') !!}
                  {!! Form::text('study_name', null, array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('faculty_code', trans('tuta.faculty') .' *') !!}
                      {!! Form::select('faculty_code', $faculty, null, array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('stage', trans('tuta.stage') .' *') !!}
                  {!! Form::text('stage', null, array('class' => 'form-control')) !!}
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
