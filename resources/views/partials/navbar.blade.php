<nav style="background: #ffffff; border-bottom: 1px solid #e2e8f0; padding: 14px 0; margin-bottom: 20px;">
    <div style="max-width: 1000px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center;">
        <a href="#" style="font-weight: 700; font-size: 1.2rem; color: #4f46e5; text-decoration: none;">
            📚 App Perpustakaan
        </a>
        <div style="display: flex; gap: 20px;">
            <a href="{{ route('books.index') }}" style="color: #475569; text-decoration: none; font-weight: 600; font-size: 0.95rem;">Buku</a>
            <a href="{{ route('categories.index') }}" style="color: #475569; text-decoration: none; font-weight: 600; font-size: 0.95rem;">Kategori</a>
            <a href="{{ route('members.index') }}" style="color: #475569; text-decoration: none; font-weight: 600; font-size: 0.95rem;">Anggota</a>
        </div>
    </div>
</nav>