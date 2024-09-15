@extends('admin.layouts.app')

@section('title', 'Manage Pelayanan')

@section('content')
    <h1>Manage Pelayanan</h1>
    <a href="{{ route('manage-pelayanan.create') }}" class="btn btn-primary mb-3">Tambah Pelayanan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered" id="searchable-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori Layanan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelayanan as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}
                    <td>{{ $item->kategori_layanan }}</td>
                    <td>
                        <a href="{{ route('manage-pelayanan.edit', $item->id_layanan) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('manage-pelayanan.destroy', $item->id_layanan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $pelayanan->links() }} --}}
@endsection
