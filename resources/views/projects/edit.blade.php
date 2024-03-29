@extends('layouts.master')
@section('content')
    <h1 class="text-info">Edit Project</h1>
    <form method= "POST" action="/projects/{{ $project->id }}" >
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label for="projectTitle">Project Ttile</label>
        <input type="text" class="form-control" id="projectTitle" placeholder="e.g. Learn Laravel" value="{{ old('title') ? old('title') : $project->title }}" name="title">
        </div>
        
        <div class="form-group">
            <label for="projectDescription">Project Description</label>
            <textarea class="form-control" id="projectDescription" placeholder="e.g. Finish the laracast serie" name="description" rows="5">{{ old('description') ? old('description') : $project->description }}</textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Edit</button>
        </div>
    </form>
    <form action="/projects/{{ $project->id }}" method="POST">
        @method('DELETE')
        @csrf
        <div class="form-group">
            <button class="btn btn-danger" type="submit">Delete</button>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection