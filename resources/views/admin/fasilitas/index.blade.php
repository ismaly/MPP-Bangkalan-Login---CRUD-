@extends('admin.layouts.app')

@section('title', 'Manage Fasilitas')

@section('content')
    <h1>Manage Fasilitas</h1>
    <a href="{{ route('manage-fasilitas.create') }}" class="btn btn-primary mb-3">Tambah Fasilitas</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered" id="searchable-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Fasilitas</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fasilitas as $index => $item)
            <tr>
                <td>{{ $index + 1 }}
                <td>{{ $item->nama_fasilitas }}</td>
                <td>{{ $item->desc_fasilitas }}</td>
                <td>
                    <!-- Menampilkan gambar -->
                    <img src="{{ asset('storage/fasilitas/' . $item->gambar_fasilitas) }}" alt="{{ $item->nama_fasilitas }}" width="200">
                </td>
                <td>
                    <a href="{{ route('manage-fasilitas.edit', $item->id_fasilitas) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('manage-fasilitas.destroy', $item->id_fasilitas) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>

    {{ $fasilitas->links() }}
@endsection
