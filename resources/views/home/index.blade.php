@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Dashboard</h1>
            <a href="{{ url('detail') }}">
                Detail
            </a>
        </div>
    </div>
@endsection
