@extends('layouts.app')

@section('content')

<h3>Create New Task</h3>

    <div class="row">
        <div class="col-8">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('Title', 'Task Title:') !!}
                    {!! Form::text('Title', null, ['class' => 'form-control']) !!}
                    {!! Form::label('Details', 'Task Detail:') !!}
                    {!! Form::text('Details', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection