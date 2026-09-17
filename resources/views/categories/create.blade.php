<h1>Tambah Kategori</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div>
        <label>Nama Kategori:</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
    <button type="submit">Simpan</button>
</form>