@extends('tasks.layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-3">

      <table class="table table-sm"><tbody>
        <tr><td><h4><strong>Show Task Detail</strong></h4></td></tr>
        <tr><td>{{$task->title}}</td></tr><br/>
        <tr><td>{{$task->description}}</td></tr><br/>       
      </table>
    </div>
  </div>
  <a href="{{route('tasks.index')}}" class="btn btn-warning">Back</a>
@stop