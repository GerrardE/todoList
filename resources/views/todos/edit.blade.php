@extends('layouts.app')
@section('content')
    <h1>Edit Todo</h1>

    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
        {{ Form::bsText('title', $todo->title) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::bsSubmit('submit', ['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}

    <a class="btn btn-sm btn-default" href="/todo/{{ $todo->id }}">Go back</a>
@endsection