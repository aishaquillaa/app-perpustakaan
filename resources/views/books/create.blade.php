<h1>Tambah Buku</h1>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div>
        <label>Judul Buku:</label><br>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Penulis:</label><br>
        <input type="text" name="author" value="{{ old('author') }}">
        @error('author') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Tahun Terbit:</label><br>
        <input type="text" name="year" value="{{ old('year') }}">
        @error('year') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
    <button type="submit">Simpan</button>
</form>