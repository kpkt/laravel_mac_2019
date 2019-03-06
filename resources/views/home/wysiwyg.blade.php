@extends('layouts.admin')

@section('title', 'WYSIWYG')

@section('content')
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control summernote"></textarea>
    </div>
@endsection