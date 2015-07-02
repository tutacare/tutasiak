@extends('app')

@section('content')
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-8">

          <div class="row">
        		<div class="col-md-12">
        			<div class="panel panel-default">
        				<div class="panel-heading">Add New Announcement</div>
        				<div class="panel-body">
        					{!! Html::ul($errors->all()) !!}

        					{!! Form::open(array('url' => 'dashboard/admin/announcements', 'files' => true)) !!}

        					<div class="form-group">
        					{!! Form::label('title', 'Title') !!}
        					{!! Form::text('title', Input::old('title'), array('class' => 'form-control')) !!}
        					</div>

        					<div class="form-group">
        					{!! Form::label('content', 'Content') !!}
        					{!! Form::textarea('content', Input::old('content'), array('rows' => '10', 'cols' => '80', 'id' => 'editor1', 'class' => 'form-control')) !!}
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

        					{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}

        					{!! Form::close() !!}
        				</div>
        			</div>
        		</div>
        	</div>

        </div>
        @include('home.sidebar')
    </div>
</div>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
@endsection
