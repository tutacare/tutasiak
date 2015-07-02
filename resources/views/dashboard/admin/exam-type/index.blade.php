@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

        <div class="col-md-12">
            <h2>Exam Type <a class="btn btn-primary" href="{{ URL::to('dashboard/admin/exam-types/create') }}" role="button">Add New</a></h2>
        </div>
        @if (Session::has('message'))
        <div class="col-md-12">
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        </div>
        @endif
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Name</td>
            <td>&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    @foreach($examType as $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('dashboard/admin/exam-types/' . $value->id . '/edit') }}">Edit</a>
                {!! Form::open(array('url' => 'dashboard/admin/exam-types/' . $value->id, 'class' => 'pull-right')) !!}
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
