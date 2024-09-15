@extends('admin.layouts.app')

@section('title', 'Manage Instansi')

@section('content')
    <h1>Manage Instansi</h1>
    <a href="{{ route('manage-instansi.create') }}" class="btn btn-primary mb-3">Tambah Instansi</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered" id="searchable-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Instansi</th>
                <th>Gambar</th>
                <th>URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instansi as $item)
                <tr>
                    <td>{{ $item->id_instansi }}</td>
                    <td>{{ $item->nama_instansi }}</td>
                    <td>
                        <img src="{{ asset('storage/instansi/' . $item->gambar_instansi) }}" alt="{{ $item->nama_instansi }}" width="200">
                    </td>
                    <td>{{ $item->url }}</td>
                    <td>
                        <a href="{{ route('manage-instansi.edit', $item->id_instansi) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('manage-instansi.destroy', $item->id_instansi) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $instansi->links() }} --}}
@endsection
