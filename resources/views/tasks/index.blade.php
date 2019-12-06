@extends('tasks.layouts.app')
@section('content')
<div class="row" style="padding-top:50px;">
    <div class="col-sm-9">
        <a href="{{route('tasks.create')}}" class="btn btn-primary" style="margin:20px;">Create</a>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Nr</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th colspan="3" style="text-align:center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <th scope="row">{{$task->id}}</th>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td><a href="{{route('tasks.show', $task->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></td>
                    <td><a href="{{route('tasks.edit', $task->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <form action="{{route('tasks.destroy',$task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td>
                            <button type="submit" class="btn btn-link">Delete
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </td>
                    </form>
                </tr>
                @endforeach
        </table>
    </div>
</div>
@stop