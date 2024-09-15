@extends('admin.layouts.app')

@section('title', 'Edit Fasilitas')

@section('content')
    <h1>Edit Fasilitas</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manage-fasilitas.update', $fasilitas->id_fasilitas) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_fasilitas">Nama Fasilitas</label>
            <input type="text" name="nama_fasilitas" class="form-control" value="{{ $fasilitas->nama_fasilitas }}" required>
        </div>
        <div class="form-group">
            <label for="desc_fasilitas">Deskripsi Fasilitas</label>
            <textarea name="desc_fasilitas" class="form-control" required>{{ $fasilitas->desc_fasilitas }}</textarea>
        </div>
        <div class="form-group">
            <label for="gambar_fasilitas">Gambar:</label>
            <input type="file" class="form-control-file" id="gambar_fasilitas" name="gambar_fasilitas">
            @if($fasilitas->gambar_fasilitas)
                <img src="{{ asset('storage/fasilitas/' . $fasilitas->gambar_fasilitas) }}" alt="{{ $fasilitas->title }}" width="200" class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('manage-fasilitas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
