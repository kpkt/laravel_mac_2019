@extends('layouts.admin')

@section('title', 'Calc')

@section('content')
    <form method="post" action="{{ route('home.calc.store') }}">
        @csrf

        <div class="form-group">
            <label>No 1</label>
            <input type="text" name="no_1" class="form-control">
        </div>

        <div class="form-group">
            <label>No 2</label>
            <input type="text" name="no_2" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Hantar</button>
        </div>
    </form>
@endsection
