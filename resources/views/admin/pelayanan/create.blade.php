@extends('admin.layouts.app')

@section('title', 'Tambah Pelayanan')

@section('content')
    <h1>Tambah Pelayanan</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manage-pelayanan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kategori_layanan">Kategori Layanan</label>
            <input type="text" name="kategori_layanan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('manage-pelayanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection