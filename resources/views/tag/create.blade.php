@extends('layouts.admin')

@section('title', 'New Tag')

@section('content')
    {!! Form::open(['route' => 'tags.store']) !!}
    @include('tag._form')
    {!! Form::close() !!}
@endsection