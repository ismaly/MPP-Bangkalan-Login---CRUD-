@extends('admin.layouts.app')

@section('title', 'Edit Sub Pelayanan')

@section('content')
    <h1>Edit Sub Layanan</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manage-sub-pelayanan.update', $subpelayanan->id_sub) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_sub">Nama Fasilitas</label>
            <input type="text" name="nama_sub" id="nama_sub" class="form-control" value="{{ old('nama_sub', $subpelayanan->nama_sub) }}" required>
        </div>
        <div class="form-group">
            <label for="id_layanan">Kategori Layanan</label>
            <select name="id_layanan" id="id_layanan" class="form-control" required>
                <option value="" disabled>Pilih Kategori Layanan</option>
                @foreach($pelayanan as $item)
                    <option value="{{ $item->id_layanan }}" {{ $item->id_layanan == $subpelayanan->id_layanan ? 'selected' : '' }}>
                        {{ $item->id_layanan }} - {{ $item->kategori_layanan }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('manage-sub-pelayanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
    
@endsection
