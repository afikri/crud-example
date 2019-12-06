@extends('tasks.layouts.app')
@section('content')
<div class="row" style="padding-top:50px;">
    <div class="col-md-6">
        <form method="POST" action="{{route('tasks.store')}}">
        @csrf
            <div class="form-group col-md-9">
                <div class="form-group">
                    <label">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Put the activity">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="What is it all about?">
                </div>                
                <button type="submit" class="btn btn-link">Save</button>or<a href="{{route('tasks.index')}}" class="btn btn-link">Back</button>
        </form>
    </div>
</div>
@stop