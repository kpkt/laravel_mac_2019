@extends('layouts.admin')

@section('title', 'Posts')

@section('content')
    <div class="row">
        <div class="col text-right mb-2">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">
                New Post
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Thumbnail</th>
                <th>Category</th>
                <th>Subject</th>
                <th>Publish On</th>
                <th>Created</th>
                <th style="width: 200px;">Action</th>
            </tr>
            <!-- Loop Data -->
            @foreach($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td></td>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ $post->subject }}</td>
                    <td>{{ $post->published_at != null ? $post->published_at->format('d M Y, H:i A') : '' }}</td>
                    <td>{{ $post->created_at->format('d M Y, H:i A') }}</td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['posts.destroy', $post->id]]) !!}
                        @method('DELETE')

                        @if($post->is_draft)
                            <a href="{{ route('posts.edit', ['id' => $post->id]) }}"
                               class="btn btn-warning btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>

                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>

                            <a href="{{ route('posts.publish', ['id' => $post->id]) }}"
                               class="btn btn-info btn-sm">
                                Publish
                            </a>
                        @else
                            <a href="{{ route('posts.unpublished', ['id' => $post->id]) }}"
                               class="btn btn-dark btn-sm">
                                Unpublish
                            </a>
                        @endif

                        {!! Form::close() !!}
                    </td>
                </tr>
        @endforeach
        <!-- End Loop Data -->
        </table>
    </div>
@endsection