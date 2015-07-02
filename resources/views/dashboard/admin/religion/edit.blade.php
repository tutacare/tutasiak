@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

              <div class="panel panel-default">
                <div class="panel-heading">{{trans('tuta.update_religion')}}</div>

                <div class="panel-body">
                  {!! Html::ul($errors->all()) !!}

                  {!! Form::model($religion, array('route' => array('dashboard.admin.religion.update', $religion->id), 'method' => 'PUT')) !!}

                  <div class="form-group">
                  {!! Form::label('name', trans('tuta.name').' *') !!}
                  {!! Form::text('name', null, array('class' => 'form-control')) !!}
                  </div>

                  <div class="form-group">
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
