@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

        <div class="col-md-12">
            <h2>Course <a class="btn btn-primary" href="{{ URL::to('dashboard/admin/courses/create') }}" role="button">Add New</a></h2>
        </div>
        @if (Session::has('message'))
        <div class="col-md-12">
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        </div>
        @endif
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Program Study</td>
            <td>Course Code</td>
            <td>Course Name</td>
            <td>Semester</td>
            <td>Credits</td>
            <td>Faculty Code</td>
            <td>Study ID</td>
            <td>&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    @foreach($course as $value)
        <tr>
          <td>{{$value->programStudy->name}}</td>
          <td>{{$value->course_code}}</td>
          <td>{{$value->course_name}}</td>
          <td>{{$value->semester}}</td>
          <td>{{$value->credits}}</td>
          <td>{{$value->faculty->faculty_name}}</td>
          <td>{{$value->study->study_name}}</td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('dashboard/admin/courses/' . $value->id . '/edit') }}">Edit</a>
                {!! Form::open(array('url' => 'dashboard/admin/courses/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete', array('class' => 'btn btn-warning')) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@include('home.sidebar')
</div>
</div>
@endsection
