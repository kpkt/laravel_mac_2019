@extends('layouts.admin')

@section('title', 'Category')

@section('content')
    <div class="row">
        <div class="col text-right mb-2">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">New Category</a>
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
            @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    {!! Form::open(['route' => ['categories.destroy', $category->id]]) !!}
                    @method('DELETE')
                    <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-warning">Edit</a>

                    <button type="submit" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            <!-- End Loop Data -->
        </table>
    </div>
@endsection