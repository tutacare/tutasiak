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
            <td>NIM</td>
            <td>Name</td>
            <td>Class Room</td>
            <td>Faculty</td>
            <td>Study</td>
            <td>Program Study</td>
            <td>Academic Year</td>
            <td>Email</td>
            <td>Religion</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Active</td>
            <td colspan="2">&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    @foreach($student as $value)
        <tr>
            <td>{{ $value->nim }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->classroom }}</td>
            <td>{{ $value->faculty->faculty_name }}</td>
            <td>{{ $value->study->study_name }}</td>
            <td>{{ $value->programStudy->name }}</td>
            <td>{{ $value->academicRegistration->academic_year }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->religion->name }}</td>
            <td>{{ $value->address }}</td>
            <td>{{ $value->phone }}</td>
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
