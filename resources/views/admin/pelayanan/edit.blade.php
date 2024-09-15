@extends('admin.layouts.app')

@section('title', 'Edit Pelayanan')

@section('content')
    <h1>Edit Pelayanan</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manage-pelayanan.update', $pelayanan->id_layanan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kategori_layanan">Kategori Layanan</label>
            <input type="text" name="kategori_layanan" class="form-control" value="{{ $pelayanan->kategori_layanan }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('manage-pelayanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
