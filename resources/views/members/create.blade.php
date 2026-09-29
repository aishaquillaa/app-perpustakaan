<h1>Tambah Anggota</h1>
<form action="{{ route('members.store') }}" method="POST">
    @csrf
    <div>
        <label>Nama Anggota:</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
    <button type="submit">Simpan</button>
</form>