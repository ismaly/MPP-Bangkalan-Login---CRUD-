@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Manage Galeri</h1>
    <a href="{{ route('manage-galeri.create') }}" class="btn btn-primary mb-3">Tambah Galeri</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered" id="searchable-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galeri as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}
                    <td>{{ $item->title }}</td>
                    <td>
                        <img src="{{ asset('storage/galeri/' . $item->gambar_mpp) }}" alt="{{ $item->title }}" width="200">
                    </td>
                    <td>
                        <a href="{{ route('manage-galeri.edit', $item->id_galeri) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('manage-galeri.destroy', $item->id_galeri) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus galeri ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $data->links() }} --}}
</div>
@endsection
