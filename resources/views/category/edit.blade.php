@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
    {!! Form::model($category, ['route' => ['categories.update', $category->id]]) !!}
    @method('PUT')
    @include('category._form')
    {!! Form::close() !!}
@endsection