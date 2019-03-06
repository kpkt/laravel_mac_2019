@extends('layouts.admin')

@section('title', 'Edit Tag')

@section('content')
    {!! Form::model($tag, ['route' => ['tags.update', $tag->id]]) !!}
    @method('PUT')
    @include('tag._form')
    {!! Form::close() !!}
@endsection