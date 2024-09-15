@extends('admin.layouts.app')

@section('title', 'Tambah Fasilitas')

@section('content')
    <h1>Tambah Sub Pelayanan</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manage-sub-pelayanan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_sub">Nama Fasilitas</label>
            <input type="text" name="nama_sub" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="id_layanan">Kategori Layanan</label>
            <select name="id_layanan" id="id_layanan" class="form-control">
                <option value="" disabled selected>--Pilih Kategori Layanan--</option>
                @foreach($pelayanan as $pelayanan)
                    <option value="{{ $pelayanan->id_layanan }}">
                        {{ $pelayanan->id_layanan }} - {{ $pelayanan->kategori_layanan }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('manage-sub-pelayanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
