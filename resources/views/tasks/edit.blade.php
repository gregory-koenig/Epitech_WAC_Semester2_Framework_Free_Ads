@extends('layouts.app')
@section('content')
    <h1>Edit Task</h1>
    <hr>
    <form action="{{ url('tasks', [$task->id]) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" value="{{ $task->title }}" class="form-control" id="taskTitle"  name="title" >
        </div>
        <div class="form-group">
            <label for="description">Task Description</label>
            <input type="text" value="{{ $task->description }}" class="form-control" id="taskDescription" name="description" >
        </div>
        <div class="form-group">
            <label for="description">Task Photo</label>
            <input type="text" value="{{ $task->photo }}" class="form-control" id="taskPhoto" name="photo" >
        </div>
        <div class="form-group">
            <label for="description">Task Price</label>
            <input type="text" value="{{ $task->price }}" class="form-control" id="taskPrice" name="price" >
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
