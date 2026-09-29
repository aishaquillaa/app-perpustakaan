<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // 1. Tampilkan daftar anggota (dengan fitur pencarian)
    public function index(Request $request)
    {
        $search = $request->query('search');

        $members = Member::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                        ->orWhere('nim', 'like', "%{$search}%");
        })->paginate(10)->appends(['search' => $search]);

        return view('members.index', compact('members', 'search'));
    }

    // 2. Tampilkan form tambah anggota
    public function create()
    {
        return view('members.create');
    }

    // 3. Simpan anggota baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nim'    => 'required|unique:members,nim|max:20',
            'name'   => 'required|string|max:100',
            'email'  => 'required|email|unique:members,email|max:100',
            'phone'  => 'nullable|string|max:20',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        Member::create($request->all());

        return redirect()->route('members.index')->with('success', 'Anggota berhasil ditambahkan!');
    }

    // 4. Tampilkan detail anggota
    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    // 5. Tampilkan form edit anggota
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    // 6. Update data anggota di database
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'nim'    => 'required|max:20|unique:members,nim,' . $member->id,
            'name'   => 'required|string|max:100',
            'email'  => 'required|email|max:100|unique:members,email,' . $member->id,
            'phone'  => 'nullable|string|max:20',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $member->update($request->all());

        return redirect()->route('members.index')->with('success', 'Data anggota berhasil diperbarui!');
    }

    // 7. Hapus anggota dari database
    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('members.index')->with('success', 'Anggota berhasil dihapus!');
    }
}