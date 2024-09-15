@extends('admin.layouts.app')

@section('title', 'Edit Profil')

@section('content')
    <h1>Edit Profil</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.profil.update', $profil->id_profil) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $profil->title }}" required>
        </div>
        <div class="form-group">
            <label for="desc_profil">Description</label>
            <textarea name="desc_profil" class="form-control" required>{{ $profil->desc_profil }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.profil.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
