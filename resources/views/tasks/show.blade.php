@extends('layouts.app')

@section('content')

<h3>Task Details for ID = {{ $task->id }}</h3>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $task->id }}</td>
        </tr>
<!--課題提出には不要のため、コメントアウトする（あとで戻す）
        <tr>
            <th>Task Title</th>
            <td>{{ $task->title }}</td>
        </tr>
        <tr>
            <th>Task Detail</th>
            <td>{{ $task->details }}</td>
        </tr>
-->
        <tr>
            <th>Task Created At</th>
            <td>{{ $task->created_at }}</td>
        </tr>
        <tr>
            <th>Task Updated At</th>
            <td>{{ $task->updated_at }}</td>
        <tr>
            <th>Task Status (short)</th>
            <td>{{ $task->status_short }}</td>
        </tr>
        <tr>
            <th>Task Status Comment</th>
            <td>{{ $task->status }}</td>
        </tr>
        </tr>
        <tr>
            <th>Task Content</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'Edit this task', ['id' => $task->id], ['class' => 'btn btn-primary']) !!}
    
    {!! nl2br("\n") !!}
    {!! nl2br("\n") !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete this task', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection