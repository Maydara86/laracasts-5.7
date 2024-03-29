@extends('layouts.master')
@section('content')
  <h1 class="text-info">{{$project->title}}</h1>
  <hr>
  <p class="text-secondary lead">{{$project->description}}</p>
  @if ($project->tasks->count())
      @foreach($project->tasks as $task)
        <form action="/tasks/{{ $task->id }}" method="POST">
          @method('PATCH')
          @csrf
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="{{ $task->id }}" name="completed" onchange="this.form.submit()"
              @if ($task->completed)
                checked
              @endif
              >
            <label class="custom-control-label" for="{{ $task->id }}">{{ $task->description }}</label>
          </div>
        </form>
      @endforeach
  @endif
  <a href="/projects/{{$project->id}}/edit" class="btn btn-primary">Edit</a>
  <hr>
      <form action="/projects/{{ $project->id }}/tasks" method="POST">
    @csrf
    <div class="form-group">
      <label for="task">New Task</label>
      <input type="text" class="form-control" id="task" name="description">
    </div>
    <div class="form-group">
      <button class="btn btn-primary" type="submit">Add Task</button>
    </div>
  </form>
  @include('layouts.errors')
@endsection