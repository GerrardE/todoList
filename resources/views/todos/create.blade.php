@extends('layouts.app')
@section('content')
    <h1>Create Todo</h1>

    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{ Form::bsText('title') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('submit', ['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection