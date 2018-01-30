@extends('layout')

@section('title', "Edit Tag")

@section('pages')

  {{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => "PUT"]) }}

    {{ Form::label('name', "Tag Name :") }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}

    {{ Form::submit('Update', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
  {{ Form::close() }}

@endsection
