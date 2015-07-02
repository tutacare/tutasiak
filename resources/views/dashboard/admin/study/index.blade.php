@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

        <div class="col-md-12">
            <h2>Study <a class="btn btn-primary" href="{{ URL::to('dashboard/admin/studies/create') }}" role="button">Add New</a></h2>
        </div>
        @if (Session::has('message'))
        <div class="col-md-12">
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        </div>
        @endif
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Study Code</td>
            <td>Study Name</td>
            <td>Faculty</td>
            <td>Stage</td>
            <td>&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    @foreach($study as $value)
        <tr>
            <td>{{ $value->study_code }}</td>
            <td>{{ $value->study_name }}</td>
            <td>{{ $value->faculty_code }}</td>
            <td>{{ $value->stage }}</td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('dashboard/admin/studies/' . $value->id . '/edit') }}">Edit</a>
                {!! Form::open(array('url' => 'dashboard/admin/studies/' . $value->id, 'class' => 'pull-right')) !!}
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
