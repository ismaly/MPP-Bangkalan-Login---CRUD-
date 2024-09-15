@extends('admin.layouts.app')

@section('title', 'Tambah Profil')

@section('content')
    <h1>Tambah Profil</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manage-profil.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="desc_profil">Description</label>
            <textarea name="desc_profil" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('manage-profil.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
