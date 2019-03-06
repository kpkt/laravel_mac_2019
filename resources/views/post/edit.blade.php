@extends('layouts.admin')

@section('title', 'Edit Post')

@section('content')
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'files' => true]) !!}
    @method('PUT')
    @include('post._form')
    {!! Form::close() !!}
@endsection