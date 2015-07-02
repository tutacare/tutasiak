@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

        <div class="col-md-12">
            <h2>Faculty <a class="btn btn-primary" href="{{ URL::to('dashboard/admin/faculties/create') }}" role="button">Add New</a></h2>
        </div>
        @if (Session::has('message'))
        <div class="col-md-12">
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        </div>
        @endif
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Faculty Code</td>
            <td>Faculty Name</td>
            <td>&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    @foreach($faculty as $value)
        <tr>
            <td>{{ $value->faculty_code }}</td>
            <td>{{ $value->faculty_name }}</td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('dashboard/admin/faculties/' . $value->id . '/edit') }}">Edit</a>
                {!! Form::open(array('url' => 'dashboard/admin/faculties/' . $value->id, 'class' => 'pull-right')) !!}
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
