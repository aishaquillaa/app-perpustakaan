@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
    <div class="header-action">
        <h1>Daftar Anggota</h1>
        <a href="{{ route('members.create') }}" class="btn btn-primary">+ Tambah Anggota</a>
    </div>

    <!-- Form Cari -->
    <form action="{{ route('members.index') }}" method="GET" style="margin-bottom: 20px; display: flex; gap: 8px;">
        <input type="text" name="search" placeholder="Cari nama atau NIM..." value="{{ $search ?? '' }}" style="max-width: 300px;">
        <button type="submit" class="btn btn-secondary">Cari</button>
        @if(!empty($search))
            <a href="{{ route('members.index') }}" class="btn btn-secondary">Reset</a>
        @endif
    </form>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Status</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($members as $member)
                    <tr>
                        <td><strong>{{ $member->nim }}</strong></td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->phone ?? '-' }}</td>
                        <td>
                            <span class="badge {{ $member->status == 'aktif' ? 'badge-success' : 'badge-danger' }}">
                                {{ ucfirst($member->status) }}
                            </span>
                        </td>
                        <td style="text-align: center;">
                            <a href="{{ route('members.show', $member->id) }}" class="btn btn-secondary btn-sm">Detail</a>
                            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                            <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center; color: var(--text-muted);">Data anggota tidak ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>