@extends('admin.layouts.app')

@section('title', 'Tambah Syarat')

@section('content')
    <h1>Tambah Syarat</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manage-syarat.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="komponen">Komponen syarat</label>
            <input type="text" name="komponen" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="uraian">Deskripsi syarat</label>
            <textarea name="uraian" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="id_sub">Kategori Jenis Layanan</label>
            <select name="id_sub" id="id_sub" class="form-control">
                <option value="" disabled selected>--Pilih Jenis Layanan--</option>
                @foreach($subpelayanan as $subpelayanan)
                    <option value="{{ $subpelayanan->id_sub }}">
                        {{ $subpelayanan->id_sub }} - {{ $subpelayanan->nama_sub }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('manage-syarat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
