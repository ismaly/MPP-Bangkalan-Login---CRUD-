@extends('admin.layouts.app')

@section('title', 'Hapus Profil')

@section('content')
    <h1>Hapus Profil</h1>

    <p>Apakah Anda yakin ingin menghapus data ini?</p>

    <form action="{{ route('admin.profil.destroy', $profil->id_profil) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
        <a href="{{ route('admin.profil.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
