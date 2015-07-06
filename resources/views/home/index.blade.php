@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
          @foreach($announcement as $value)
          <h1>{{ $value->title }}</h1>
          {!! $value->content !!}
          @endforeach
        </div>
        @include('home.sidebar')
    </div>
</div>
@endsection
