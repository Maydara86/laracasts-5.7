@extends('layouts.master')
@section('content')
    <h1 class="text-info">Create a Project</h1>
    <br>
    <form method= "POST" action="/projects" >
        @csrf
        
        <div class="form-group">
            <label for="projectTitle">Project Ttile</label>
        <input type="text" class="form-control {{ $errors->has('title') ? 'border border-danger' : '' }}" id="projectTitle" placeholder="e.g. Learn Laravel" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="projectDescription">Project Description</label>
            <textarea class="form-control {{ $errors->has('description') ? 'border border-danger' : '' }}" name="description" id="projectDescription" rows="5" placeholder="e.g. Finish the laracast serie" required>{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
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