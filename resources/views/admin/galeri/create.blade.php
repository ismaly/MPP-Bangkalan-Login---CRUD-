@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Galeri</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('manage-galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="gambar_mpp">Gambar:</label>
            <input type="file" class="form-control-file" id="gambar_mpp" name="gambar_mpp" required>
        </div>
        <input type="hidden" name="id_user" value="{{ auth()->user()->id_user }}">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
