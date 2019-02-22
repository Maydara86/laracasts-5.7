@extends('layouts.master')
@section('content')
    <h1 class="text-info">{{$project->title}}</h1>
    <hr>
    <p class="text-secondary lead">{{$project->description}}</p>
    @if ($project->tasks->count())
        @foreach($project->tasks as $task)
            <ul>
                <li>{{ $task->description }}</li>
            </ul>    
        @endforeach
    @endif
    <a href="/projects/{{$project->id}}/edit" class="btn btn-primary">Edit</a>

@endsection