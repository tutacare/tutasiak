@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

        <div class="col-md-12">
            <h2>Student <a class="btn btn-primary" href="{{ URL::to('dashboard/admin/students/create') }}" role="button">Add New</a></h2>
        </div>
        @if (Session::has('message'))
        <div class="col-md-12">
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        </div>
        @endif
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td><small>NIM</small></td>
            <td><small>Name</small></td>
            <td><small>classroom</small></td>
            <td><small>faculty_code</small></td>
            <td><small>study_id</small></td>
            <td><small>program_study_id</small></td>
            <td><small>academic_registration_id</small></td>
            <td><small>email</small></td>
            <td><small>religion_id</small></td>
            <td><small>address</small></td>
            <td><small>phone</small></td>
            <td><small>Active</small></td>
            <td colspan="2">&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    @foreach($student as $value)
        <tr>
            <td><small>{{ $value->nim }}</small></td>
            <td><small>{{ $value->name }}</small></td>
            <td><small>{{ $value->classroom }}</small></td>
            <td><small>{{ $value->faculty_code }}</small></td>
            <td><small>{{ $value->study_id }}</small></td>
            <td><small>{{ $value->program_study_id }}</small></td>
            <td><small>{{ $value->academic_registration_id }}</small></td>
            <td><small>{{ $value->email }}</small></td>
            <td><small>{{ $value->religion_id }}</small></td>
            <td><small>{{ $value->address }}</small></td>
            <td><small>{{ $value->phone }}</small></td>
            <td>{{ $value->active }}</td>
            <td>
                <a class="btn btn-xs btn-info" href="{{ URL::to('dashboard/admin/students/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
              </td><td>

                {!! Form::open(array('url' => 'dashboard/admin/students/' . $value->id)) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    <button class="btn btn-xs btn-danger" onClick="return confirm('Are you sure want to delete?')" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

</div>
</div>
@endsection
