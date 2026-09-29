@extends('layouts.app')
@section('title', 'Tambah Kategori')
@section('content')
    <a href="{{ route('categories.index') }}">← Kembali ke daftar</a>
    <h1>Tambah Kategori</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nama Kategori:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection