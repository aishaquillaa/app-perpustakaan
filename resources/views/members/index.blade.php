<h1>Daftar Anggota</h1>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
<a href="{{ route('members.create') }}">Tambah Anggota</a>
<ul>
    @foreach($members as $member)
        <li>{{ $member['name'] }} - {{ $member['email'] }}</li>
    @endforeach
</ul>