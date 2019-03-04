@extends('layouts.admin')

@section('title', 'Profile')

@section('content')
    <form method="post" action="{{ route('home.profile.store') }}">
        @csrf

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>

        <div class="form-group">
            <label>Umur</label>
            <input type="text" name="umur" class="form-control">
        </div>

        <div class="form-group">
            <label>Jantina</label>
            <select name="jantina" class="form-control">
                <option value="L">Lelaki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Hantar</button>
        </div>
    </form>
@endsection
