<h1>Daftar Buku</h1>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
<a href="{{ route('books.create') }}">Tambah Buku</a>
<ul>
    @foreach($books as $book)
        <li>{{ $book['title'] }} - {{ $book['author'] }} ({{ $book['year'] }})</li>
    @endforeach
</ul>