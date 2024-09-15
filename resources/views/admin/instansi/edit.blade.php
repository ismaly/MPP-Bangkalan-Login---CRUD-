@extends('admin.layouts.app')

@section('title', 'Edit Instansi')

@section('content')
    <h1>Edit Instansi</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manage-instansi.update', $instansi->id_instansi) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_instansi">Nama Instansi</label>
            <input type="text" name="nama_instansi" class="form-control" value="{{ $instansi->nama_instansi }}" required>
        </div>
        <div class="form-group">
            <label for="gambar_instansi">Gambar Instansi:</label>
            <input type="file" name="gambar_instansi" class="form-control mb-2">
            @if($instansi->gambar_instansi)
                <img src="{{ asset('storage/instansi/' . $instansi->gambar_instansi) }}" alt="{{ $instansi->nama_instansi }}" width="300" class="mt-2">
            @endif
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" name="url" class="form-control" value="{{ $instansi->url }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('manage-instansi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
