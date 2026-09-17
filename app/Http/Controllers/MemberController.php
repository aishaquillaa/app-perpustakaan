<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = [
            ['id' => 1, 'name' => 'Aisyah', 'email' => 'ais.msbp@gmail.com'],
        ];
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();
        return redirect()->route('members.index')->with('success', 'Member created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "MemberController@show, id: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "MemberController@edit, id: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "MemberController@update, id: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "MemberController@destroy, id: " . $id;
    }
}
