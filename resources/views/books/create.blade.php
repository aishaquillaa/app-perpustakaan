@extends('layouts.app')
@section('title', 'Tambah Buku')
@section('content')
    <a href="{{ route('books.index') }}">← Kembali ke daftar</a>
    <h1>Tambah Buku</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Judul Buku:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="author">Penulis:</label>
            <input type="text" id="author" name="author" value="{{ old('author') }}">
            @error('author')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="year">Tahun Terbit:</label>
            <input type="number" id="year" name="year" value="{{ old('year') }}">
            @error('year')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection