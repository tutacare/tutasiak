@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

        <div class="col-md-12">
            <h2>Religion <a class="btn btn-primary" href="{{ URL::to('dashboard/admin/religions/create') }}" role="button">Add New</a></h2>
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
            <td colspan="2">&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    @foreach($religion as $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->active }}</td>
            <td>
                <a class="btn btn-xs btn-info" href="{{ URL::to('dashboard/admin/religions/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
              </td><td>

                {!! Form::open(array('url' => 'dashboard/admin/religions/' . $value->id)) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    <button class="btn btn-xs btn-danger" onClick="return confirm('Are you sure want to delete?')" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
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
