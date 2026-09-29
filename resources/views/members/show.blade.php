@extends('layouts.app')
@section('title', 'Detail Anggota')
@section('content')
    <a href="{{ route('members.index') }}">← Kembali ke daftar</a>
    <h1>Detail Anggota</h1>
    <p><strong>NIM:</strong> {{ $member->nim }}</p>
    <p><strong>Nama:</strong> {{ $member->name }}</p>
    <p><strong>Email:</strong> {{ $member->email }}</p>
    <p><strong>No. Telepon:</strong> {{ $member->phone ?? '-' }}</p>
    <p><strong>Status:</strong> {{ ucfirst($member->status) }}</p>
    <p><strong>Terdaftar Pada:</strong> {{ $member->created_at->format('d M Y') }}</p>
    <a href="{{ route('members.edit', $member->id) }}">Edit Data Ini</a>
@endsection