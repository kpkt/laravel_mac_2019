@extends('layouts.admin')

@section('title', 'Edit Profile')

@section('content')
    <form method="post" action="{{ route('home.profile.update', ['id' => $profile->id]) }}">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $profile->nama }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Umur</label>
            <input type="text" name="umur" value="{{ $profile->umur }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Jantina</label>
            <select name="jantina" class="form-control">
                <option value="">-- Sila Pilih --</option>
                <option value="L" {{ $profile->jantina == 'L' ? 'selected' : '' }}>Lelaki</option>
                <option value="P" {{ $profile->jantina == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Hantar</button>
        </div>
    </form>
@endsection
