@extends('layouts.app')

@section('content')

<h3>Update Task</h3>

    <div class="row">
        <div class="col-8">
            <p>ID: {{ $task->id }}</p>
            <p>Task Title: {{ $task->title }}</p>
            <p>Created at: {{ $task->created_at }}</p>
            
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
                <div class="form-group">
                    {!! Form::label('details', 'Task Details: ') !!}
                    {!! Form::text('details', null, ['class' => 'form-control']) !!}
                    {!! Form::label('status', 'Task Status: ') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection