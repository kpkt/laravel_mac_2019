@extends('layouts.admin')

@section('title', 'Senarai Profil')

@section('content')
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jantina</th>
            <th>Updated</th>
            <th>Delete</th>
            <th>Tindakan</th>
        </tr>
        @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->id }}</td>
                <td>{{ $profile->nama }}</td>
                <td>{{ $profile->umur }}</td>
                <td>{{ $profile->jantina }}</td>
                <td>{{ $profile->updated_at }}</td>
                <td>{{ $profile->deleted_at }}</td>
                <td>
                    <a href="{{ route('home.profile.edit', ['id' => $profile->id]) }}"
                       class="btn btn-warning">
                        Kemaskini
                    </a>
                    <a href="{{ route('home.profile.destroy', ['id' => $profile->id]) }}"
                       class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
