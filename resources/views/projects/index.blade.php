@extends('layouts.master')
@section('content')
    <h1 class="text-info">Projects List</h1>
    <br>
    <ul class="list-group">
        @foreach ($projects as $project)
            <li class="list-group-item">
                <a href="/projects/{{$project->id}}">
                    {{$project->title}}
                </a>
            <a href="/projects/{{$project->id}}/edit" class="btn btn-primary btn-sm float-right">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection