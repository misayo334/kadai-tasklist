@extends('layouts.app')

@section('content')

<h3>Tasks Overview</h3>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
<!--課題提出には不要のため、コメントアウトする（あとで戻す）
                    <th>Task</th>
                    <th>Task Detail</th>
-->
                    <th>Task Status (short)</th>
                    <th>Task Status Comment</th>
                    <th>Task Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
<!--課題提出には不要のため、コメントアウトする（あとで戻す）
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->details }}</td>
-->
                    <td>{{ $task->status_short }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{ $tasks->render('pagination::bootstrap-4') }}
    
    {!! link_to_route('tasks.create', 'Create New Task', null, ['class' => 'btn btn-link']) !!}
    
    <br>
    <br>
    
    {!! link_to_route('signup.get', '便宜的に今はここに追加：Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}

@endsection