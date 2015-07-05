@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

              <div class="panel panel-default">
                <div class="panel-heading">{{trans('tuta.update_day')}}</div>

                <div class="panel-body">
                  {!! Html::ul($errors->all()) !!}

                  {!! Form::model($day, array('route' => array('dashboard.admin.days.update', $day->id), 'method' => 'PUT')) !!}

                  <div class="form-group">
                  {!! Form::label('day', trans('tuta.day').' *') !!}
                  {!! Form::text('day', null, array('class' => 'form-control')) !!}
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
