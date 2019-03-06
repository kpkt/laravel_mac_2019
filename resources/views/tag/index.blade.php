@extends('layouts.admin')

@section('title', 'Tag')

@section('content')
    <div class="row">
        <div class="col text-right mb-2">
            <a href="{{ route('tags.create') }}" class="btn btn-primary">New Tag</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            <!-- Loop Data -->
            @foreach($tags as $tag)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tag->name }}</td>
                <td>
                    {!! Form::open(['route' => ['tags.destroy', $tag->id]]) !!}
                    @method('DELETE')
                    <a href="{{ route('tags.edit', ['id' => $tag->id]) }}" class="btn btn-warning">Edit</a>

                    <button type="submit" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            <!-- End Loop Data -->
        </table>
    </div>
@endsection