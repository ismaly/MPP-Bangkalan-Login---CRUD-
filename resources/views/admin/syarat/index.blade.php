@extends('admin.layouts.app')

@section('title', 'Manage Syarat')

@section('content')
    <h1>Manage Syarat</h1>
    <a href="{{ route('manage-syarat.create') }}" class="btn btn-primary mb-3">Tambah Syarat</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered" id="searchable-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Komponen</th>
                <th>Uraian</th>
                <th>Jenis Syarat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($syarat as $index => $item)
                <tr>
                    <td>{{ $item->id_komponen }}</td>
                    <td>{{ $item->komponen }}</td>
                    <td>{{ $item->uraian }}</td>
                    <td>{{ $item->subpelayanan->nama_sub }}</td>
                    <td>
                        <a href="{{ route('manage-syarat.edit', $item->id_komponen) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('manage-syarat.destroy', $item->id_komponen) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $syarat->links() }} --}}
@endsection
