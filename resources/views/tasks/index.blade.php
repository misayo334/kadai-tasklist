@extends('layouts.app')

@section('content')

<h3>Tasks Overview</h3>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Task Detail</th>
                    <th>Task Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->details }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create', 'Create New Task', null, ['class' => 'btn btn-link']) !!}

@endsection