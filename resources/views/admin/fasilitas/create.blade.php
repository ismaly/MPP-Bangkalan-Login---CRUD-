@extends('admin.layouts.app')

@section('title', 'Tambah Fasilitas')

@section('content')
    <h1>Tambah Fasilitas</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('manage-fasilitas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_fasilitas">Nama Fasilitas</label>
            <input type="text" name="nama_fasilitas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="desc_fasilitas">Deskripsi Fasilitas</label>
            <textarea name="desc_fasilitas" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="gambar_fasilitas">Gambar Fasilitas</label>
            <input type="file" name="gambar_fasilitas" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('manage-fasilitas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
    
@endsection
