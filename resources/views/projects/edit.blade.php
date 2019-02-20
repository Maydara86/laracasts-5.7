@extends('layouts.master')
@section('content')
<h1 class="text-info">Edit Project</h1>
<form method= "POST" action="/projects/{{$project->id}}" >
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="projectTitle">Project Ttile</label>
    <input type="text" class="form-control" id="projectTitle" placeholder="e.g. Learn Laravel" value="{{$project->title}}" name="title">
    </div>
    <div class="form-group">
        <label for="projectDescription">Project Description</label>
        <input type="text" class="form-control" id="projectDescription" placeholder="e.g. Finish the laracast serie" value="{{$project->description}}" name="description">
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Edit</button>
        <form action="/projects/{{$project->id}}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
</form>
@endsection