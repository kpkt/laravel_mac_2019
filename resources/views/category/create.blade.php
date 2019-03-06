@extends('layouts.admin')

@section('title', 'New Category')

@section('content')
    {!! Form::open(['route' => 'categories.store']) !!}
    @include('category._form')
    {!! Form::close() !!}
@endsection