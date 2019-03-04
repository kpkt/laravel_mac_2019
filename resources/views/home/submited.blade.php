@extends('layouts.admin')

@section('title', 'Submited Profile')

@section('content')
    <div class="row">
        <div class="col-2">Nama</div>
        <div class="col">{{ $postData['nama'] }}</div>
    </div>

    <div class="row">
        <div class="col-2">Umur</div>
        <div class="col">{{ $postData['umur'] }}</div>
    </div>

    <div class="row">
        <div class="col-2">Jantina</div>
        <div class="col">{{ $postData['jantina'] == 'L' ? 'Lelaki' : 'Perempuan' }}</div>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{ route('home.profile') }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </div>
@endsection
