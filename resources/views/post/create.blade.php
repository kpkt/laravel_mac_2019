@extends('layouts.admin')

@section('title', 'New Post')

@section('content')
    {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
    @include('post._form')
    {!! Form::close() !!}
@endsection