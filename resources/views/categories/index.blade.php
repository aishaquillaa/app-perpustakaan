<h1>Daftar Kategori</h1>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
<a href="{{ route('categories.create') }}">Tambah Kategori</a>
<ul>
    @foreach($categories as $category)
        <li>{{ $category['name'] }}</li>
    @endforeach
</ul>