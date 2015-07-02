@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

        <div class="col-md-12">
            <h2>Day <a class="btn btn-primary" href="{{ URL::to('dashboard/admin/days/create') }}" role="button">Add New</a></h2>
        </div>
        @if (Session::has('message'))
        <div class="col-md-12">
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        </div>
        @endif
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Day</td>
            <td>&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    @foreach($day as $value)
        <tr>
            <td>{{ $value->day }}</td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('dashboard/admin/days/' . $value->id . '/edit') }}">Edit</a>
                {!! Form::open(array('url' => 'dashboard/admin/days/' . $value->id, 'class' => 'pull-right')) !!}
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
