@extends('admin.layouts.app')

@section('title', 'Tambah Instansi')

@section('content')
    <h1>Tambah Instansi</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manage-instansi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_instansi">Nama Instansi</label>
            <input type="text" name="nama_instansi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gambar_instansi">Gambar Instansi</label>
            <input type="file" name="gambar_instansi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" name="url" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('manage-instansi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
