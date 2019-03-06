@extends('layouts.admin')

@section('title', 'Senarai Profil')

@section('content')
    <div class="row">
        <div class="col mb-1 text-right">
            <a href="{{ route('home.profile') }}" class="btn btn-primary">New Profile</a>
        </div>
    </div>
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
                    @if($profile->deleted_at == null)
                        <a href="{{ route('home.profile.destroy', ['id' => $profile->id]) }}"
                           class="btn btn-danger">
                            Hapus
                        </a>
                    @else
                        <a href="{{ route('home.profile.restore', ['id' => $profile->id]) }}"
                           class="btn btn-dark">
                            Restore
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection
