@extends('layouts.master')
@section('content')
    <h1 class="text-info">{{$project->title}}</h1>
    <hr>
    <p class="text-secondary lead">{{$project->description}}</p>
<a href="/projects/{{$project->id}}/edit" class="btn btn-primary">Edit</a>
@endsection