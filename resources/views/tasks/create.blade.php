@extends('layouts.app')

@section('content')

<h3>Create New Task</h3>

    <div class="row">
        <div class="col-8">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}

<!--課題提出には不要のため、コメントアウトする（あとで戻す）
                <div class="form-group">
                    {!! Form::label('Title', 'Task Title:') !!}
                    {!! Form::text('Title', null, ['class' => 'form-control']) !!}
                    {!! Form::label('Details', 'Task Detail:') !!}
                    {!! Form::text('Details', null, ['class' => 'form-control']) !!}
                </div>
-->
                <div class="form-group">
                    {!! Form::label('status_short', 'Task Status:') !!}
                    {!! Form::select('status_short', [
                                       'open' => 'status open',
                                       'closed' => 'status closed',
                                       'on hold' => 'status on hold']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'Status Comment:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', 'Task Content:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection