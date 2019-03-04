@extends('layouts.admin')

@section('title', 'Calc Process')

@section('content')
    <div class="row">
        <div class="col-2">Input 1</div>
        <div class="col">{{ $input_1 }}</div>
    </div>
    <div class="row">
        <div class="col-2">Input 2</div>
        <div class="col">{{ $input_2 }}</div>
    </div>
    <div class="row">
        <div class="col-2">Jumlah</div>
        <div class="col">{{ $total }}</div>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{ route('home.calc.form') }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </div>
@endsection
