@extends('admin.layouts.app')

@section('title', 'Manage Fasilitas')

@section('content')
    <h1>Manage Sub Layanan</h1>
    <a href="{{ route('manage-sub-pelayanan.create') }}" class="btn btn-primary mb-3">Tambah Fasilitas</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered" id="searchable-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Sub Pelayanan</th>
                <th>Kategori Layanan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subpelayanan as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}
                    <td>{{ $item->nama_sub }}</td>
                    <td>{{ $item->pelayanan->kategori_layanan }}</td>
                    <td>
                        <a href="{{ route('manage-sub-pelayanan.edit', $item->id_sub) }}" class="btn btn-warning btn-sm mb-1">Edit</a>
                        <form action="{{ route('manage-sub-pelayanan.destroy', $item->id_sub) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $subpelayanan->links() }} --}}
@endsection
