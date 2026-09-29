@extends('layouts.app')
@section('title', 'Daftar Kategori')
@section('content')
    <h1>Daftar Kategori</h1>
    <a href="{{ route('categories.create') }}">Tambah Kategori</a>
    <ul>
        @foreach($categories as $category)
            <li>{{ $category['name'] }}</li>
        @endforeach
    </ul>
@endsection