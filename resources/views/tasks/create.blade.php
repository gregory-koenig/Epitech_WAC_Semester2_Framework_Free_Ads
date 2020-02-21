@extends('layouts.app')
@section('content')
    @csrf
    <h1>Add New Task</h1>
    <hr>
    <form action="/tasks" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" class="form-control" id="taskTitle"  name="title">
        </div>
        <div class="form-group">
            <label for="description">Task Description</label>
            <input type="text" class="form-control" id="taskDescription" name="description">
        </div>
        <div class="form-group">
            <label for="photo">Task Photo</label>
            <input type="text" class="form-control" id="taskPhoto" name="photo">
        </div>
        <div class="form-group">
            <label for="price">Task Price</label>
            <input type="text" class="form-control" id="taskPrice" name="price">
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
