<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MemberController extends Controller
{
    public function index()
    {
        $members = [
            ['id' => 1, 'name' => 'Aisyah Mahadma', 'email' => 'aisyah@example.com', 'phone' => '081234567890'],
            ['id' => 2, 'name' => 'Budi Santoso', 'email' => 'budi@example.com', 'phone' => '089876543210'],
            ['id' => 3, 'name' => 'Siti Rahma', 'email' => 'siti@example.com', 'phone' => '085512345678'],
        ];
        return view('members.index', compact('members'));
    }
}