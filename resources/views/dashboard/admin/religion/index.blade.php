@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

        <div class="col-md-12">
            <h2>Religion <a class="btn btn-primary" href="{{ URL::to('dashboard/admin/religion/create') }}" role="button">Add New</a></h2>
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
            <td>Active</td>
            <td>&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    @foreach($religion as $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->active }}</td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('dashboard/admin/religion/' . $value->id . '/edit') }}">Edit</a>
                {!! Form::open(array('url' => 'dasboard/admin/religion/' . $value->id, 'class' => 'pull-right')) !!}
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
