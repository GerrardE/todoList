@extends('layouts.app')
@section('content')

    <a class="btn btn-sm btn-default" href="/">Go back</a>
    <h1>{{ $todo->title }}</h1>
    
    <p>{{ $todo->body }}</p>

      <p>
            <span class="label label-danger">
                {{ $todo->due }}
            </span>
      </p>  

    <a class="btn btn-sm btn-primary" href="/todo/{{ $todo->id }}/edit">Edit</a>
  
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('delete', ['class'=>'btn btn-danger pull-right', 'value'=>'delete']) }}
    {!! Form::close() !!}

@endsection