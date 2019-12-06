@extends('tasks.layouts.app')
@section('content')
<div class="row" style="padding-top:50px;">
    <div class="col-md-6">
        <form method="POST" action="{{route('tasks.update', $task->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group col-md-9">
                <div class="form-group">
                    <label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$task->title}}">
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$task->description}}">
                </div>
                <button type="submit" class="btn btn-link">Save</button>or<a href="{{route('tasks.index')}}" class="btn btn-link">Back</button>
        </form>
    </div>
</div>
@stop