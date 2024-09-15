@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Edit Galeri</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('manage-galeri.update', $galeri->id_galeri) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $galeri->title }}" required>
        </div>
        <div class="form-group">
            <label for="gambar_mpp">Gambar:</label>
            <input type="file" class="form-control-file" id="gambar_mpp" name="gambar_mpp">
            @if($galeri->gambar_mpp)
                <img src="{{ asset('storage/galeri/' . $galeri->gambar_mpp) }}" alt="{{ $galeri->title }}" width="200" class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
