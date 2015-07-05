@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

              <div class="panel panel-default">
                <div class="panel-heading">{{trans('tuta.update_program_study')}}</div>

                <div class="panel-body">
                  {!! Html::ul($errors->all()) !!}

                  {!! Form::model($programStudy, array('route' => array('dashboard.admin.program-studies.update', $programStudy->id), 'method' => 'PUT')) !!}

                  <div class="form-group">
                  {!! Form::label('name', trans('tuta.name').' *') !!}
                  {!! Form::text('name', null, array('class' => 'form-control')) !!}
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
