@extends('layouts.app')

@section('content')

<h3>Update Task</h3>

    <div class="row">
        <div class="col-8">
            <p>ID: {{ $task->id }}</p>
<!--課題提出には不要のため、コメントアウトする（あとで戻す）
            <p>Task Title: {{ $task->title }}</p>
            <p>Created at: {{ $task->created_at }}</p>
-->            
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

                <div class="form-group">
<!--課題提出には不要のため、コメントアウトする（あとで戻す）
                    {!! Form::label('Details', 'Task Detail:') !!}
                    {!! Form::text('Details', null, ['class' => 'form-control']) !!}
                </div>
-->
                <div class="form-group">
                    {!! Form::label('content', 'Task Content:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection