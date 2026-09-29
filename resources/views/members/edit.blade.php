@extends('layouts.app')
@section('title', 'Edit Anggota')
@section('content')
    <a href="{{ route('members.index') }}">← Kembali ke daftar</a>
    <h1>Edit Data Anggota</h1>
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>NIM:</label><br>
            <input type="text" name="nim" value="{{ old('nim', $member->nim) }}">
            @error('nim') <div style="color: red;">{{ $message }}</div> @enderror
        </div><br>
        <div>
            <label>Nama Lengkap:</label><br>
            <input type="text" name="name" value="{{ old('name', $member->name) }}">
            @error('name') <div style="color: red;">{{ $message }}</div> @enderror
        </div><br>
        <div>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email', $member->email) }}">
            @error('email') <div style="color: red;">{{ $message }}</div> @enderror
        </div><br>
        <div>
            <label>No. Telepon:</label><br>
            <input type="text" name="phone" value="{{ old('phone', $member->phone) }}">
            @error('phone') <div style="color: red;">{{ $message }}</div> @enderror
        </div><br>
        <div>
            <label>Status:</label><br>
            <select name="status">
                <option value="aktif" {{ old('status', $member->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ old('status', $member->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select>
            @error('status') <div style="color: red;">{{ $message }}</div> @enderror
        </div><br>
        <button type="submit">Update Anggota</button>
    </form>
@endsection