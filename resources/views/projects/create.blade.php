@extends('layouts.master')
@section('content')
<h1 class="text-info">Create a Project</h1>
<br>
<form method= "POST" action="/projects" >
        @csrf
        <div class="form-group">
            <label for="projectTitle">Project Ttile</label>
            <input type="text" class="form-control" id="projectTitle" placeholder="e.g. Learn Laravel" name="title">
        </div>
        <div class="form-group">
            <label for="projectDescription">Project Description</label>
            <textarea class="form-control" name="description" id="projectDescription" cols="30" rows="5" placeholder="e.g. Finish the laracast serie"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
@endsection