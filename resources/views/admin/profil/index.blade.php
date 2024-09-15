@extends('admin.layouts.app')

@section('title', 'Manage Profil')

@section('content')
    <div class="container">
        <h1 class="mb-4">Manage Profil</h1>

        <div class="mb-3 text-end">
            <a href="{{ route('manage-profil.create') }}" class="btn btn-primary">Tambah Profil</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mb-4">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered" id="searchable-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profils as $index => $profil)
                        <tr>
                            <td>{{ $index + 1 }}
                            <td>{{ $profil->title }}</td>
                            <td>{{ $profil->desc_profil }}</td>
                            <td class="text-center">
                                <a href="{{ route('manage-profil.edit', $profil->id_profil) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('manage-profil.destroy', $profil->id_profil) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- {{ $profils->links() }} --}}
    </div>
@endsection
