@extends('layouts.app')
@section('title', 'Daftar Anggota')
@section('content')
    <h1>Daftar Anggota</h1>
    <ul>
        @foreach($members as $member)
            <li>
                <strong>{{ $member['name'] }}</strong> - {{ $member['email'] }} ({{ $member['phone'] }})
            </li>
        @endforeach
    </ul>
@endsection