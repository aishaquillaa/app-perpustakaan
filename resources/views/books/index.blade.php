@extends('layouts.app')
@section('title', 'Daftar Buku')
@section('content')
    <h1>Daftar Buku</h1>
    <a href="{{ route('books.create') }}">Tambah Buku</a>
    <ul>
        @foreach($books as $book)
            <li>{{ $book['title'] }} - {{ $book['author'] }} ({{ $book['year'] }})</li>
        @endforeach
    </ul>
@endsection