@extends('layouts.admin')

@section('content')
    <h1>{{$project->name}}</h1>

    <div class="mt-4">
        {{$project->description}}
    </div>
@endsection